export function initMegaMenu() {
    const megaBtn = document.getElementById("hs-mega-menu");
    const megaDropdown = document.getElementById("hs-mega-menu-dropdown");

    if (!megaBtn || !megaDropdown) return;

    // Toggle manual (klik tombol)
    megaBtn.addEventListener("click", (e) => {
        console.log("Tombol mega menu diklik");
        e.stopPropagation();

        if (megaDropdown.classList.contains("hidden")) {
            // buka
            megaDropdown.classList.remove("hidden", "opacity-0");
            megaDropdown.classList.add("block");
            megaBtn.setAttribute("aria-expanded", "true");
        } else {
            // tutup
            megaDropdown.classList.add("hidden", "opacity-0");
            megaDropdown.classList.remove("block");
            megaBtn.setAttribute("aria-expanded", "false");
        }
    });

    // Klik di luar area => tutup
    document.addEventListener("click", (e) => {
        console.log("Klik di luar area");
        if (!megaDropdown.contains(e.target) && !megaBtn.contains(e.target)) {
            megaDropdown.classList.add("hidden", "opacity-0");
            megaDropdown.classList.remove("block");
            megaBtn.setAttribute("aria-expanded", "false");
        }
    });
}
