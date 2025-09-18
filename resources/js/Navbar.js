export function initNavbar() {
    const toggleBtn = document.getElementById("hs-header-scrollspy-collapse");
    const collapseEl = document.getElementById("hs-header-scrollspy");

    if (!toggleBtn || !collapseEl) return;

    toggleBtn.addEventListener("click", () => {
        const isClosed = collapseEl.classList.contains("hidden");

        if (isClosed) {
            // Buka
            collapseEl.classList.remove("hidden");
            collapseEl.style.maxHeight = collapseEl.scrollHeight + "px";
            collapseEl.style.opacity = "1";
        } else {
            // Tutup (dengan animasi)
            collapseEl.style.maxHeight = collapseEl.scrollHeight + "px"; // set tinggi sekarang
            setTimeout(() => {
                collapseEl.style.maxHeight = "0px";
                collapseEl.style.opacity = "0";
            }, 10);

            // Setelah animasi selesai, baru hidden
            setTimeout(() => {
                collapseEl.classList.add("hidden");
            }, 500);
        }
    });
}
