import "./bootstrap";
import "preline";
import "@preline/toggle-password";
window.setTheme = function (theme) {
    const html = document.documentElement;
    if (theme === "dark") {
        html.classList.add("dark");
        console.log("dark mode aktif");
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
    window.dispatchEvent(new Event("on-hs-appearance-change"));
};
// fungsi untuk klik manual (langsung aktif saat diklik)
window.setActiveNav = function () {
    const links = document.querySelectorAll("#navbar .nav-link");

    if (!links.length) return;

    links.forEach((link) => {
        link.addEventListener("click", function () {
            links.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        });
    });
};

// fungsi untuk aktif otomatis saat scroll (scroll spy)
window.observeActiveSection = function () {
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll("#navbar .nav-link");

    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => {
                        link.classList.remove("active");
                        if (
                            link.getAttribute("href") === `#${entry.target.id}`
                        ) {
                            console.log(link + " aktif");
                            link.classList.add("active");
                        }
                    });
                }
            });
        },
        { threshold: 0.6 },
    ); // aktif kalau 60% section kelihatan

    sections.forEach((section) => observer.observe(section));
};
