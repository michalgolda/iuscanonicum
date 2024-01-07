document.addEventListener("DOMContentLoaded", () => {
  const btnElm = document.querySelector("#scroll-top-btn");
  const headerElm = document.querySelector("#header");

  window.addEventListener("scroll", () => {
    if (window.scrollY >= headerElm.clientHeight) {
      btnElm.classList.remove("button--scroll-top--hidden");
    } else {
      btnElm.classList.add("button--scroll-top--hidden");
    }
  });
});
