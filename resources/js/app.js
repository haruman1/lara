import "./bootstrap";
import "preline";
import "@preline/toggle-password";
import "@preline/collapse";
import { setLanguage, initLanguage } from "./bahasa";
import * as Preline from "preline";
import { initPrelineDropdownFix } from "./scrollspy";
import { initDropdown } from "./dropdown";
window.Preline = Preline;
document.addEventListener("DOMContentLoaded", () => {
    // init bahasa
    initLanguage();
    initPrelineDropdownFix();

    window.setLanguage = setLanguage;
});
window.addEventListener("popstate", function () {
    const navbar = window.navbar;
    if (navbar) {
        const currentPage = navbar.getActivePage();
        navbar.setActiveMenuItem(currentPage);
    }
});
// ketika Livewire sudah siap (awal booting)
document.addEventListener("livewire:load", () => {
    console.log("Livewire loaded, running navbar init...");
    initPrelineDropdownFix();
});

// setiap kali berpindah halaman dengan wire:navigate
document.addEventListener("livewire:navigated", () => {
    initLanguage();
    initPrelineDropdownFix();

    // initDropdown();
    HSStaticMethods.autoInit();
    // const links = document.querySelectorAll("a[wire\\:navigate]");
    // const currentPath =
    //     window.location.pathname === "/" ? "/home" : window.location.pathname;

    // links.forEach((link) => {
    //     link.removeAttribute("aria-current");

    //     // samakan dengan href tanpa query
    //     let linkPath = new URL(link.href).pathname;
    //     if (linkPath === "/" || linkPath === "/home") {
    //         linkPath = "/home"; // anggap root = home
    //     }

    //     if (currentPath === linkPath) {
    //         link.setAttribute("aria-current", "page");
    //     }
    // });
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
