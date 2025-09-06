<!-- 🔄 Fullscreen Loading Overlay -->
<div>
    <livewire:components.loading-overlay />

    <!-- 🌐 Language Switcher Dropdown -->
    <div class="hs-dropdown relative inline-flex [--trigger:hover] mb-8">
        <button id="hs-dropdown-custom" type="button"
            class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-gray-300 bg-white text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
            🌐 <span id="current-lang">Indonesia</span>
            <svg class="hs-dropdown-open:rotate-180 w-4 h-4 text-gray-500 transition-transform"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div
            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 mt-2 min-w-[8rem] border border-gray-200">
            <a href="javascript:void(0);" onclick="setLanguage('id')"
                class="flex items-center gap-2 py-2 px-3 rounded-md hover:bg-gray-100 text-gray-700">
                🇮🇩 Indonesia
            </a>
            <a href="javascript:void(0);" onclick="setLanguage('en')"
                class="flex items-center gap-2 py-2 px-3 rounded-md hover:bg-gray-100 text-gray-700">
                🇬🇧 English
            </a>
        </div>
    </div>

    <!-- 📦 Content -->
    <div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md text-center">
        <h1 data-lang-key="Selamat Datang" class="text-2xl font-bold text-gray-800 mb-4"></h1>
        <p data-lang-key="Konten Halaman" class="text-gray-600 mb-6"></p>
        <button data-lang-key="Klik Disini"
            class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
        </button>
    </div>
</div>
@vite(['resources/js/app.js'])


</html>
