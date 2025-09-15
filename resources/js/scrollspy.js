// initScrollSpy.js
export function initScrollSpy() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll("#navbar a[data-target]");

    navLinks.forEach((link) => {
        const href = link.getAttribute("href");
        if (!href) return;

        const url = new URL(href, window.location.origin);
        if (url.pathname === currentPath) {
            link.setAttribute("aria-current", "page");
        } else {
            link.removeAttribute("aria-current");
        }

        // ✅ Auto close navbar setelah klik link
        link.addEventListener("click", () => {
            HSCollapse.hide("#hs-navbar-floating-dark");
        });
    });
}
