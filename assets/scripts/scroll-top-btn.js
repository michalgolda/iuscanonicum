document.addEventListener("DOMContentLoaded", () => {
  const btnElm = document.querySelector("#scroll-top-btn");
  const headerElm = document.querySelector("#header");

  window.addEventListener("scroll", () => {
    if (window.scrollY >= headerElm.clientHeight) {
      btnElm.classList.remove("hidden");
    } else {
      btnElm.classList.add("hidden");
    }
  });
});
