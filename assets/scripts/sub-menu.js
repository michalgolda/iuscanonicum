window.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll(".menu-item");

  menuItems.forEach((menuItem) => {
    const subMenu = menuItem.querySelector(".sub-menu");

    if (!subMenu) return;

    menuItem.addEventListener("mouseenter", () => {
      subMenu.classList.add("sub-menu__show");
    });

    menuItem.addEventListener("mouseleave", () => {
      subMenu.classList.remove("sub-menu__show");
    });

    subMenu.addEventListener("mouseenter", () => {
      subMenu.classList.add("sub-menu__show");
    });

    subMenu.addEventListener("mouseleave", () => {
      subMenu.classList.remove("sub-menu__show");
    });
  });
});
