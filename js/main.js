console.log("SJCM Website Loaded");
AOS.init({
  duration: 800,
  once: true,
});

const menuButton = document.getElementById("mobile-menu-button");

const mobileMenu = document.getElementById("mobile-menu");

menuButton.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");

  const icon = menuButton.querySelector("i");

  icon.classList.toggle("fa-bars");

  icon.classList.toggle("fa-xmark");
});
