<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Kumon') }} - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/globals.css'])
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <div class="mx-auto h-12 w-12 flex items-center justify-center rounded-full bg-blue-100">
                    <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign in to Kumon
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Enter your credentials to access your dashboard
                </p>
            </div>

            <form class="mt-8 space-y-6" action="{{ url('/login') }}" method="POST">
                @csrf

                {{-- Error alert --}}
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-md p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414
                                      1.414L8.586 10l-1.293 1.293a1 1 0
                                      101.414 1.414L10 11.414l1.293
                                      1.293a1 1 0 001.414-1.414L11.414
                                      10l1.293-1.293a1 1 0
                                      00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">
                                    {{ $errors->first() }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Email & Password --}}


                <div class="w-full p-4 bg-white rounded-lg shadow-md dark:text-white">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="max-w-sm space-y-3">
                        <div class="relative">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                value="{{ old('email') }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Enter Email">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                            </div>
                        </div>
                        <label for="hs-toggle-password" class="block text-sm mb-2 dark:text-white">Password</label>
                        <div class="relative">
                            <input id="hs-toggle-password" name="password" type="password"
                                autocomplete="current-password" required
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <button type="button"
                                data-hs-toggle-password='{
      "target": "#hs-toggle-password"
    }'
                                class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path class="hs-password-active:hidden"
                                        d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                    </path>
                                    <path class="hs-password-active:hidden"
                                        d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                    </path>
                                    <line class="hs-password-active:hidden" x1="2" x2="22" y1="2"
                                        y2="22"></line>
                                    <path class="hidden hs-password-active:block"
                                        d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3">
                                    </circle>
                                </svg>
                            </button>
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
                    </div>
                    {{-- <div class="flex items-center">
                        <input id="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div> --}}
                    <div class="flex -ml-px items-center mb-4">
                        <input type="checkbox"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-default-checkbox" name="remember" type="checkbox">
                        <label for="hs-default-checkbox"
                            class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Remember me</label>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Login disini
                        </button>
                    </div>
                    <div class="mt-6 text-center text-sm text-gray-600">
                        Belum punya akun?
                        <a href="{{ url('/register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                            Daftar di sini
                        </a>
                    </div>
                </div>
                {{-- <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            value="{{ old('email') }}"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md 
                                  placeholder-gray-500 text-gray-900 focus:outline-none 
                                  focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="Enter your email">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md 
                                  placeholder-gray-500 text-gray-900 focus:outline-none 
                                  focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="Enter your password">
                    </div>
                </div> --}}

                {{-- Remember Me --}}


                {{-- Sign In Button --}}



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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
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



                    {{-- Demo Accounts --}}
                    <div class="text-center mt-6">
                        <div class="text-sm text-gray-600">
                            <strong>Demo Accounts:</strong><br>
                            Admin: admin@kumon.com / password<br>
                            User: user@kumon.com / password<br>
                            Guest: guest@kumon.com / password
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>
