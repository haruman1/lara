<!-- Modal -->
<div id="forgotModal"
    class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 transition-colors duration-500 transition-opacity">

    <div
        class="bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-neutral-900 dark:border-neutral-800 relative max-w-lg w-full p-6">
        <!-- Tombol close -->
        <button id="forgotCloseModalBtn"
            class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
            ✕
        </button>

        <div class="text-center"
            class="bg-white p-6 relative rounded-lg max-w-lg w-full transform transition-all duration-300 scale-95 opacity-0">
            <h3 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">Forgot password?</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                Remember your password?
                <a class="text-blue-600 hover:underline dark:text-blue-500" href="#">
                    Sign in here
                </a>
            </p>
        </div>

        <div class="mt-5">
            <form>
                <div class="grid gap-y-4">
                    <div>
                        <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                        <input type="email" id="email" name="email"
                            class="py-2.5 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400"
                            required>
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                        Reset password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
