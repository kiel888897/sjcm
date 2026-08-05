console.log("SJCM Website Loaded");

if (typeof AOS !== "undefined") {
  AOS.init({
    duration: 800,
    once: true,
  });
}

const menuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

if (menuButton && mobileMenu) {
  menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");

    const icon = menuButton.querySelector("i");
    if (icon) {
      icon.classList.toggle("fa-bars");
      icon.classList.toggle("fa-xmark");
    }
  });
}
