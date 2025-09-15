import "./bootstrap";
import "preline";
import "@preline/toggle-password";
import "@preline/collapse";
import { setLanguage, initLanguage } from "./bahasa";
import * as Preline from "preline";
import { initScrollSpy } from "./scrollspy";
import { initDropdown } from "./dropdown";
window.Preline = Preline;
document.addEventListener("DOMContentLoaded", () => {
    // init bahasa
    initLanguage();
    initScrollSpy();
    HSCollapse.autoInit();
    window.setLanguage = setLanguage;
    HSStaticMethods.autoInit();
    // Extra: kalau klik di luar navbar → auto close
    document.addEventListener("click", (e) => {
        const navbar = document.querySelector("#hs-navbar-floating-dark");
        const burger = document.querySelector("[data-hs-collapse]");

        if (!navbar || !burger) return;

        if (
            navbar.classList.contains("open") &&
            !navbar.contains(e.target) &&
            !burger.contains(e.target)
        ) {
            HSCollapse.hide("#hs-navbar-floating-dark");
        }
    });
    // init AOS (Animate On Scroll)
});
// ketika Livewire sudah siap (awal booting)
document.addEventListener("livewire:load", () => {
    console.log("Livewire loaded, running scrollspy 1...");
    initScrollSpy();
});

// setiap kali berpindah halaman dengan wire:navigate
document.addEventListener("livewire:navigated", () => {
    initLanguage();
    initDropdown();
    HSStaticMethods.autoInit();
    const links = document.querySelectorAll("a[wire\\:navigate]");
    const currentPath =
        window.location.pathname === "/" ? "/home" : window.location.pathname;

    links.forEach((link) => {
        link.removeAttribute("aria-current");

        // samakan dengan href tanpa query
        let linkPath = new URL(link.href).pathname;
        if (linkPath === "/" || linkPath === "/home") {
            linkPath = "/home"; // anggap root = home
        }

        if (currentPath === linkPath) {
            link.setAttribute("aria-current", "page");
        }
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
