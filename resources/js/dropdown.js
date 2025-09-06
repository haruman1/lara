// resources/js/dropdown.js

export function initDropdown() {
    const dropdownToggles = document.querySelectorAll(".hs-dropdown-toggle");

    dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", function () {
            const dropdownMenu = this.nextElementSibling;
            dropdownMenu.classList.toggle("hidden");
        });
    });

    // Tutup dropdown ketika klik di luar
    document.addEventListener("click", (e) => {
        if (!e.target.matches(".hs-dropdown-toggle")) {
            document.querySelectorAll(".hs-dropdown-menu").forEach((menu) => {
                menu.classList.add("hidden");
            });
        }
    });
}
