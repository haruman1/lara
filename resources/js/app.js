import "./bootstrap";
import "preline";
import "@preline/toggle-password";
import "@preline/collapse";
import { setLanguage, initLanguage } from "./bahasa";
import * as Preline from "preline";
import { initNavbar } from "./Navbar";
import { initDropdown } from "./dropdown";
window.Preline = Preline;
document.addEventListener("DOMContentLoaded", () => {
    initNavbar();
    // init bahasa

    initLanguage();
    window.setLanguage = setLanguage;

    window.addEventListener("load", function () {
        document.querySelectorAll("[data-collapse-toggle]").forEach((btn) => {
            btn.addEventListener("click", function () {
                const targetId = btn.getAttribute("data-collapse-toggle");
                const target = document.querySelector(targetId);

                if (!target) return;

                // tutup kalau lagi open
                if (!target.classList.contains("hidden")) {
                    target.classList.add("hidden");
                    btn.querySelector("svg")?.classList.remove("rotate-180");
                } else {
                    target.classList.remove("hidden");
                    btn.querySelector("svg")?.classList.add("rotate-180");
                }
            });
        });
    });
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
