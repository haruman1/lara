export async function setLanguage(locale) {
    const overlay = document.getElementById("loading-overlay");
    const currentLang = document.getElementById("current-lang");

    overlay.classList.remove("hidden"); // tampilkan overlay full page

    try {
        const res = await fetch(`/translations/${locale}`);
        if (!res.ok) throw new Error("Translation file not found");

        const translations = await res.json();

        // update semua element yg ada data-lang-key
        document.querySelectorAll("[data-lang-key]").forEach((el) => {
            const key = el.getAttribute("data-lang-key");
            if (translations[key]) {
                el.textContent = translations[key];
            }
        });

        // update label dropdown
        currentLang.textContent =
            locale === "id"
                ? "Indonesia"
                : locale === "en"
                  ? "English"
                  : "Japanese";

        // simpan ke localStorage
        localStorage.setItem("locale", locale);
    } catch (error) {
        console.error("Error loading translations:", error);
    } finally {
        // minimal loading 3 detik
        setTimeout(() => {
            overlay.classList.add("hidden");
        }, 3000);
    }
}

export function initLanguage() {
    const savedLang = localStorage.getItem("locale") || "id";
    setLanguage(savedLang);
}
