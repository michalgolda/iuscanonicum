const formElm = document.querySelector("#contact-form");
const messageElm = formElm.querySelector(".form__message");

const REST_CONTACT_ENDPOINT = "/wp-json/iuscanonicum/contact";
const SUBMITTER_LABEL = {
  RATE_LIMIT_ON: "Wysyłanie...",
  RATE_LIMIT_OFF: "Wyślij",
};
const MESSAGE_CLASS = {
  HIDDEN: "form__message--hidden",
  SUCCESS: "form__message--success",
  ERROR: "form__message--error",
};
const MESSAGES = {
  SUCCESS: "Wiadomość została pomyślnie wysłana.",
  ERROR: "Podczas wysyłania wiadomości wystąpił nieoczekiwany błąd.",
};
const MESSAGE_VISIBILE_TIME = 7000;

const sendContactRequest = (payload, nonce) =>
  fetch(`${REST_CONTACT_ENDPOINT}?nonce=${nonce}`, {
    method: "POST",
    headers: {
      "content-type": "application/json",
    },
    body: JSON.stringify(payload),
  });

const enableRateLimit = (submitter) => {
  submitter.disabled = true;
  submitter.textContent = SUBMITTER_LABEL.RATE_LIMIT_ON;
};

const disableRateLimit = (submitter) => {
  submitter.disabled = false;
  submitter.textContent = SUBMITTER_LABEL.RATE_LIMIT_OFF;
};

const showMessage = (message, typeClass) => {
  messageElm.classList.remove(MESSAGE_CLASS.HIDDEN);
  messageElm.classList.add(typeClass);
  messageElm.textContent = message;

  setTimeout(() => {
    messageElm.classList.add(MESSAGE_CLASS.HIDDEN);
  }, MESSAGE_VISIBILE_TIME);
};

const showSuccessMessage = () =>
  showMessage(MESSAGES.SUCCESS, MESSAGE_CLASS.SUCCESS);

const showErrorMessage = () => showMessage(MESSAGES.ERROR, MESSAGE_CLASS.ERROR);

formElm.addEventListener("submit", (e) => {
  e.preventDefault();

  const submitter = e.submitter;
  const formData = new FormData(e.target);
  const payload = {
    firstName: formData.get("firstName"),
    lastName: formData.get("lastName"),
    email: formData.get("email"),
    topic: formData.get("topic"),
    content: formData.get("content"),
  };
  const nonce = formData.get("nonce");

  enableRateLimit(submitter);

  sendContactRequest(payload, nonce)
    .then((res) => {
      if (res.ok) {
        showSuccessMessage();
      } else {
        showErrorMessage();
      }

      disableRateLimit(submitter);
    })
    .catch(() => {
      console.log(error);
      showErrorMessage();
      disableRateLimit(submitter);
    });
});
