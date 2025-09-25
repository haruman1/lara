// resources/js/theme.js

export function setTheme(themeName) {
    console.log("Setting theme to:", themeName);
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

    window.dispatchEvent(new Event("on-hs-appearance-change"));
}
export function initTheme() {
    const savedTheme = localStorage.getItem("hs_theme") || "auto";
    setTheme(savedTheme);
}
