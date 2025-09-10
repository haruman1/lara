export function initScrollSpy() {
    const navLinks = document.querySelectorAll("#navbar a[href^='#']");
    const sections = [];

    // Ambil semua section berdasarkan href
    navLinks.forEach((link) => {
        const id = link.getAttribute("href").slice(1);
        const section = document.getElementById(id);
        if (section) {
            sections.push(section);

            // Smooth scroll on click
            link.addEventListener("click", (e) => {
                e.preventDefault();
                section.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        }
    });

    function onScroll() {
        const scrollPos = window.scrollY + 100; // offset biar lebih rapi
        let current = null;

        sections.forEach((section) => {
            if (
                scrollPos >= section.offsetTop &&
                scrollPos < section.offsetTop + section.offsetHeight
            ) {
                current = section.id;
            }
        });

        navLinks.forEach((link) => {
            if (link.getAttribute("href").slice(1) === current) {
                link.setAttribute("aria-current", "page");
            } else {
                link.removeAttribute("aria-current");
            }
        });
    }

    window.addEventListener("scroll", onScroll);
    onScroll(); // jalankan sekali pas load
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
