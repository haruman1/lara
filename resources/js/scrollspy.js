export function initScrollSpy() {
    const currentPath = window.location.pathname;
    const navLinks = Array.from(
        document.querySelectorAll("#navbar a[data-target]"),
    );

    // highlight link berdasarkan pathname aktif
    navLinks.forEach((link) => {
        const href = link.getAttribute("href");
        if (!href) return;

        const url = new URL(href, window.location.origin);
        if (url.pathname === currentPath) {
            link.setAttribute("aria-current", "page");
        } else {
            link.removeAttribute("aria-current");
        }
    });
}

export function initBackToTop() {
    const btn = document.getElementById("backToTop");

    if (!btn) return;

    // Munculkan tombol saat scroll > 200px
    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            btn.classList.remove("hidden");
        } else {
            btn.classList.add("hidden");
        }
    });

    // Klik tombol → scroll ke atas
    btn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
}
