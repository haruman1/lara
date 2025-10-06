import { initModal } from "../Modal";
document.addEventListener("DOMContentLoaded", () => {
    const password = document.getElementById("password");
    const toggle = document.getElementById("togglePassword");
    const eyeOpen = document.getElementById("eyeOpen");
    const eyeClosed = document.getElementById("eyeClosed");
    toggle.addEventListener("click", () => {
        const type =
            password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle icon
        eyeOpen.classList.toggle("hidden");
        eyeClosed.classList.toggle("hidden");
    });
    initModal("forgotModal", "forgotOpenModalBtn", "forgotCloseModalBtn");
});
