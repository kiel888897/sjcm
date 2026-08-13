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

const teamModal = document.getElementById("teamModal");
const closeTeamModal = document.getElementById("closeTeamModal");
const teamModalName = document.getElementById("teamModalName");
const teamModalRole = document.getElementById("teamModalRole");
const teamModalCertImage = document.getElementById("teamModalCertImage");
const teamModalCertImageSkn = document.getElementById("teamModalCertImageSkn");
const teamButtons = document.querySelectorAll("[data-name]");

teamButtons.forEach((button) => {
  button.addEventListener("click", () => {
    if (!teamModal || !teamModalName || !teamModalRole || !teamModalCertImage || !teamModalCertImageSkn) return;

    const fallbackImage1 = "assets/images/team/skk-nama.jpg";
    const fallbackImage2 = "assets/images/team/skn-nama.jpg";

    teamModalName.textContent = button.dataset.name || "Nama";
    teamModalRole.textContent = button.dataset.role || "Jabatan";

    teamModalCertImage.src = button.dataset.certificate || fallbackImage1;
    teamModalCertImage.alt = `${button.dataset.name || "Team member"} certificate`;
    teamModalCertImage.onerror = () => {
      teamModalCertImage.src = fallbackImage1;
    };

    teamModalCertImageSkn.src = button.dataset.certificateSkn || fallbackImage2;
    teamModalCertImageSkn.alt = `${button.dataset.name || "Team member"} additional certificate`;
    teamModalCertImageSkn.onerror = () => {
      teamModalCertImageSkn.src = fallbackImage2;
    };

    teamModal.classList.remove("hidden");
    teamModal.classList.add("flex");
  });
});

if (closeTeamModal && teamModal) {
  closeTeamModal.addEventListener("click", () => {
    teamModal.classList.add("hidden");
    teamModal.classList.remove("flex");
  });
}

if (teamModal) {
  teamModal.addEventListener("click", (event) => {
    if (event.target === teamModal) {
      teamModal.classList.add("hidden");
      teamModal.classList.remove("flex");
    }
  });
}
