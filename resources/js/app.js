import "./bootstrap";
import "preline";
import "@preline/toggle-password";
import { setLanguage, initLanguage } from "./bahasa";
import { initTheme, setTheme } from "./theme";

import * as Preline from "preline";

document.addEventListener("DOMContentLoaded", () => {
    window.Preline = Preline;
    window.setLanguage = setLanguage;
    window.setTheme = setTheme;
    initLanguage();
    // init bahasa
    initLanguage();
    initTheme();
    if (window.HSStaticMethods?.autoInit) {
        try {
            window.HSStaticMethods.autoInit();
        } catch (e) {
            /* ignore */
        }
    }
});

// ketika Livewire sudah siap (awal booting)
document.addEventListener("livewire:load", () => {
    console.log("Livewire loaded, running navbar init...");
    initLanguage();
});

// setiap kali berpindah halaman dengan wire:navigate
document.addEventListener("livewire:navigated", () => {
    initLanguage();
});
