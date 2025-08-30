<div class="fixed bottom-5 right-5 z-50">
    <div class="hs-dropdown relative inline-flex">
        <!-- Floating button -->
        <button type="button"
            class="hs-dropdown-toggle inline-flex items-center gap-x-2 rounded-full bg-blue-600 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-700 focus:outline-none transition-colors duration-300">
            <span class="theme-icon">
                <!-- default icon sun -->
                <svg class="w-5 h-5 hidden dark:inline" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0 5a1 1 0 0 1-1-1v-1.07a1 1 0 1 1 2 0V19a1 1 0 0 1-1 1Zm0-20a1 1 0 0 1 1 1v1.07a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1Zm10 10a1 1 0 0 1-1 1h-1.07a1 1 0 1 1 0-2H19a1 1 0 0 1 1 1ZM2.07 11H1a1 1 0 0 1 0-2h1.07a1 1 0 1 1 0 2ZM16.95 16.95a1 1 0 0 1-1.41 0l-.76-.76a1 1 0 0 1 1.41-1.41l.76.76a1 1 0 0 1 0 1.41ZM4.46 4.46a1 1 0 0 1 0 1.41l-.76.76A1 1 0 0 1 2.29 5.2l.76-.76a1 1 0 0 1 1.41 0Zm12.49-2.17a1 1 0 0 1 0 1.41l-.76.76a1 1 0 1 1-1.41-1.41l.76-.76a1 1 0 0 1 1.41 0Zm-12.49 15.2a1 1 0 0 1 0-1.41l.76-.76a1 1 0 1 1 1.41 1.41l-.76.76a1 1 0 0 1-1.41 0Z" />
                </svg>
                <!-- default icon moon -->
                <svg class="w-5 h-5 dark:hidden" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 1 1 6.707 2.707a8 8 0 0 0 10.586 10.586Z" />
                </svg>
            </span>
            Theme
            <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div
            class="hs-dropdown-menu hidden transition-[opacity,margin] duration-200 mt-2 min-w-[8rem] bg-white dark:bg-gray-800 shadow-md rounded-xl p-2 space-y-1">

            <button onclick="setTheme('light')"
                class="block w-full text-left rounded-lg px-3 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                ☀ Light
            </button>
            <button onclick="setTheme('dark')"
                class="block w-full text-left rounded-lg px-3 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                🌙 Dark
            </button>
            <button onclick="setTheme('auto')"
                class="block w-full text-left rounded-lg px-3 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                ⚙ Auto
            </button>
        </div>
    </div>
</div>
