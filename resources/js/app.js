import "./bootstrap";
import "preline";
import "@preline/toggle-password";
import { setLanguage, initLanguage } from "./bahasa";
import * as Preline from "preline";

window.Preline = Preline;

document.addEventListener("DOMContentLoaded", () => {
    // init bahasa
    initLanguage();
    window.setLanguage = setLanguage;

    // init preline (biar semua dropdown jalan otomatis)
    HSStaticMethods.autoInit();
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
