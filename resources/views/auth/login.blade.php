<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100 dark:bg-neutral-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Saya</title>
    @vite('resources/css/prelineui.css', 'resources/js/app.js')
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Aplikasi Saya
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                            Don't have an account yet?
                            <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                                href="{{ route('login') }}">
                                Sign up here
                            </a>
                        </p>
                        {{-- Demo Accounts --}}
                        <div class="text-center mt-6">
                            <div class="text-sm text-gray-600">
                                <strong>Demo Accounts:</strong><br>
                                Admin: admin@kumon.com / password<br>
                                User: user@kumon.com / password<br>
                                Guest: guest@kumon.com / password
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <!-- Social Buttons -->
                        <div class="button-group mb-2">
                            <a type="submit" href="{{ route('social.redirect', 'google') }}"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47"
                                    fill="none">
                                    <path
                                        d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                                        fill="#4285F4" />
                                    <path
                                        d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                                        fill="#34A853" />
                                    <path
                                        d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                                        fill="#FBBC05" />
                                    <path
                                        d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                                        fill="#EB4335" />
                                </svg>
                                Sign in with Google
                            </a>
                        </div>
                        <div class="button-group mb-2">
                            <a type="submit" href="{{ route('social.redirect', 'twitter-oauth-2') }}"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M18.244 2H21.5l-7.84 9.01L22 22h-6.77l-5.3-6.84L4.1 22H.833l8.37-9.625L.5 2h6.918l4.787 6.15L18.244 2z" />
                                </svg>
                                Sign in with X (Twitter)
                            </a>
                        </div>
                        <div class="button-group mb-2">
                            <a type="submit" href="{{ route('social.redirect', 'github') }}"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                <svg class="w-5 h-5" height="24" width="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.6v-2c-3.2.7-3.9-1.5-3.9-1.5-.6-1.5-1.3-1.9-1.3-1.9-1.1-.7.1-.7.1-.7
                         1.2.1 1.8 1.2 1.8 1.2 1 .1.7 2.4 3.6 1.7v-1.6c-2.6-.3-5.4-1.3-5.4-5.8 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.6.1-3.3 0 0 1-.3 3.3
                         1.2a11.4 11.4 0 0 1 6 0C18 5.4 19 5.7 19 5.7c.6 1.7.2 3 .1 3.3.8.9 1.2 2 1.2 3.2 0 4.6-2.8 5.4-5.5 5.7v1.7c0 .4.2.8.8.6
                         4.6-1.5 7.9-5.8 7.9-10.9C23.5 5.6 18.4.5 12 .5z" />
                                </svg>
                                Sign in with Github
                            </a>
                        </div>

                        <div
                            class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                            Or</div>

                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="grid gap-y-4">
                                <!-- Form Group -->
                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">Email
                                        address</label>
                                    <div class="relative">
                                        <input type="email" id="email" name="email"
                                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            required aria-describedby="email-error" value="{{ old('email') }}">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('email')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @else
                                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a
                                            valid
                                            email address so we can get back to you</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex flex-wrap justify-between items-center gap-2">
                                        <label for="password"
                                            class="block text-sm mb-2 dark:text-white">Password</label>
                                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                                            href="{{ route('login') }}">Forgot password?</a>
                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            required aria-describedby="password-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="text-xs text-red-600 mt-2" id="password-error">{{ $message }}</p>
                                    @else
                                        <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters
                                            required</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Checkbox -->
                                <div class="flex items-center">
                                    <div class="flex">
                                        <input id="remember" name="remember" type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            {{ old('remember') ? 'checked' : '' }}>
                                    </div>
                                    <div class="ms-3">
                                        <label for="remember" class="text-sm dark:text-white">Remember me</label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->

                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                                    in</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="{{ asset('vendor/preline/preline.js') }}"></script>
</body>
{{-- Social Login --}}
<div class="mt-6">
    <div class="relative">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-gray-50 text-gray-500">Atau masuk dengan</span>
        </div>
    </div>

    <div class="flex gap-3 justify-center mt-4">
        {{-- GitHub --}}
        <div class="relative group">
            <a href="{{ route('social.redirect', 'github') }}"
                class="flex justify-center items-center px-4 py-2 border border-gray-300 rounded-md 
                  shadow-sm bg-white text-gray-700 hover:bg-gray-50">
                {{-- Inline SVG GitHub --}}
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.6v-2c-3.2.7-3.9-1.5-3.9-1.5-.6-1.5-1.3-1.9-1.3-1.9-1.1-.7.1-.7.1-.7
                         1.2.1 1.8 1.2 1.8 1.2 1 .1.7 2.4 3.6 1.7v-1.6c-2.6-.3-5.4-1.3-5.4-5.8 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.6.1-3.3 0 0 1-.3 3.3
                         1.2a11.4 11.4 0 0 1 6 0C18 5.4 19 5.7 19 5.7c.6 1.7.2 3 .1 3.3.8.9 1.2 2 1.2 3.2 0 4.6-2.8 5.4-5.5 5.7v1.7c0 .4.2.8.8.6
                         4.6-1.5 7.9-5.8 7.9-10.9C23.5 5.6 18.4.5 12 .5z" />
                </svg>
            </a>
            {{-- Custom Tooltip --}}
            <div
                class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                    hidden group-hover:flex px-2 py-1 rounded-md bg-gray-800 text-white text-md shadow-lg">
                Login dengan GitHub
            </div>
        </div>

        {{-- Google --}}
        <div class="relative group">
            <a href="{{ route('social.redirect', 'google') }}"
                class="flex justify-center items-center px-4 py-2 border border-gray-300 rounded-md 
                  shadow-sm bg-white text-gray-700 hover:bg-gray-50">
                {{-- Inline SVG Google --}}
                <svg class="w-5 h-5" viewBox="0 0 48 48">
                    <path fill="#EA4335"
                        d="M24 9.5c3.9 0 6.6 1.7 8.1 3.1l5.9-5.9C34.6 3.6 29.8 1.5 24 1.5 14.5 1.5 6.4 7.4 2.8 15.7l6.9 5.4C11.7 15.2 17.4 9.5 24 9.5z" />
                    <path fill="#4285F4"
                        d="M46.1 24.6c0-1.5-.1-3.1-.4-4.6H24v9.1h12.4c-.5 2.6-2.1 4.8-4.5 6.3l7 5.4c4.1-3.8 6.5-9.4 6.5-16.2z" />
                    <path fill="#FBBC05"
                        d="M9.7 28.6c-.7-2-.9-4.2-.9-6.6s.3-4.5.9-6.6l-6.9-5.4C1.9 14.4 1 19.1 1 22s.9 7.6 1.9 10.6l6.8-5.3z" />
                    <path fill="#34A853"
                        d="M24 47c6.5 0 12-2.1 16-5.7l-7-5.4c-2 1.4-4.6 2.3-9 2.3-6.6 0-12.3-5.6-14.3-12.9l-6.9 5.4C6.3 41.1 14.5 47 24 47z" />
                </svg>
            </a>
            {{-- Custom Tooltip --}}
            <div
                class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                    hidden group-hover:flex px-2 py-1 rounded-md bg-gray-800 text-white text-md shadow-lg">
                Login dengan Google
            </div>
        </div>

        {{-- X (Twitter baru) --}}
        <div class="relative group">
            <a href="{{ route('social.redirect', 'twitter-oauth-2') }}"
                class="flex justify-center items-center px-4 py-2 border border-gray-300 rounded-md 
                  shadow-sm bg-white text-gray-700 hover:bg-gray-50">
                {{-- Inline SVG X --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path
                        d="M18.244 2H21.5l-7.84 9.01L22 22h-6.77l-5.3-6.84L4.1 22H.833l8.37-9.625L.5 2h6.918l4.787 6.15L18.244 2z" />
                </svg>
            </a>
            {{-- Custom Tooltip --}}
            <div
                class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                    hidden group-hover:flex px-2 py-1 rounded-md bg-gray-800 text-white text-md shadow-lg">
                Login dengan X
            </div>
        </div>
    </div>



    {{-- Floating Button Component --}}
    <livewire:components.float-button />

</html>





{{-- </form>
        </div>
    </div> --}}

{{-- </body>

</html> --}}
