import "./bootstrap";
import "preline";
import "@preline/toggle-password";
import AOS from "aos";
import "aos/dist/aos.css";
import { setLanguage, initLanguage } from "./bahasa";
import * as Preline from "preline";

window.Preline = Preline;

document.addEventListener("DOMContentLoaded", () => {
    // init bahasa
    initLanguage();
    window.setLanguage = setLanguage;

    // init preline (biar semua dropdown jalan otomatis)
    HSStaticMethods.autoInit();

    // init AOS (Animate On Scroll)
    AOS.init({
        duration: 800, // durasi animasi
        once: false, // animasi hanya sekali
        mirror: true, // animasi saat scroll ke atas
        startEvent: "DOMContentLoaded", // event untuk memulai animasi
        anchorPlacement: "top-bottom", // posisi awal animasi
        offset: 100, // offset animasi
        easing: "ease-in-out", // easing animasi
        delay: 100, // delay animasi
    });
});

// === THEME HANDLER ===
window.setTheme = function (themeName) {
    const htmlElement = document.documentElement;
    const preferredTheme = window.matchMedia("(prefers-color-scheme: dark)")
        .matches
        ? "dark"
        : "light";

    if (themeName === "dark") {
        htmlElement.classList.add("dark");
        localStorage.setItem("hs_theme", "dark");
    } else if (themeName === "light") {
        htmlElement.classList.remove("dark");
        localStorage.setItem("hs_theme", "light");
    } else {
        localStorage.removeItem("hs_theme");
        htmlElement.classList.toggle("dark", preferredTheme);
    }

    // trigger perubahan theme
    window.dispatchEvent(new Event("on-hs-appearance-change"));
};

// load theme yang tersimpan
const savedTheme = localStorage.getItem("hs_theme") || "auto";
window.setTheme(savedTheme);
