export function initNavbar() {
    const toggleBtn = document.querySelector("#hs-header-base-collapse");
    const navbarCollapse = document.querySelector("#navbar-collapse-main");

    if (!toggleBtn || !navbarCollapse) return;

    toggleBtn.addEventListener("click", (e) => {
        e.preventDefault();

        // coba pakai HSStaticMethods kalau ada
        if (window.HSStaticMethods?.autoInit) {
            try {
                window.HSStaticMethods.autoInit();
                return; // biar HSUI yang handle
            } catch (err) {
                console.warn("HSUI error, fallback ke custom JS:", err);
            }
        }

        // fallback custom
        if (navbarCollapse.classList.contains("hidden")) {
            navbarCollapse.classList.remove("hidden");
            navbarCollapse.classList.add("block");
            toggleBtn.setAttribute("aria-expanded", "true");
        } else {
            navbarCollapse.classList.add("hidden");
            navbarCollapse.classList.remove("block");
            toggleBtn.setAttribute("aria-expanded", "false");
        }
    });
}
