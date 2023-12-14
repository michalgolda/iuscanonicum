window.addEventListener("DOMContentLoaded", () => {
  const hamburgerBtnElm = document.querySelector("#hamburger-btn");
  const navigationElm = document.querySelector("#navigation");

  const toggleNavigation = () => {
    navigationElm.classList.toggle("header__nav--visible");
    document.body.classList.toggle("overflow--hidden");
    hamburgerBtnElm.classList.toggle("hamburger--close");
  };

  hamburgerBtnElm.addEventListener("click", () => toggleNavigation());
});
