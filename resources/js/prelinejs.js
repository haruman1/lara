window.setTheme = function (theme) {
    const html = document.documentElement;
    if (theme === "dark") {
        html.classList.add("dark");
        localStorage.setItem("hs_theme", "dark");
    } else if (theme === "light") {
        html.classList.remove("dark");
        localStorage.setItem("hs_theme", "light");
    } else {
        localStorage.removeItem("hs_theme");
        if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
            html.classList.add("dark");
        } else {
            html.classList.remove("dark");
        }
    }
    // Dispatch event jika diperlukan
    window.dispatchEvent(new Event("on-hs-appearance-change"));
};
