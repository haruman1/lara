import "./bootstrap";
import "preline";
import "@preline/toggle-password";

// ❌ hapus ini kalau kamu mau pakai custom collapse
// import "@preline/collapse";
import { initNavbar } from "./Navbar";
import { setLanguage, initLanguage } from "./bahasa";
import * as Preline from "preline";

window.Preline = Preline;

document.addEventListener("DOMContentLoaded", () => {
    // init bahasa
    initLanguage();
    if (window.HSStaticMethods?.autoInit) {
        try {
            window.HSStaticMethods.autoInit();
        } catch (e) {
            /* ignore */
        }
    }
    initNavbar();
});

// ketika Livewire sudah siap (awal booting)
document.addEventListener("livewire:load", () => {
    console.log("Livewire loaded, running navbar init...");
});

// setiap kali berpindah halaman dengan wire:navigate
document.addEventListener("livewire:navigated", () => {
    initLanguage();
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
