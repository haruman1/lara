<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Kumon') }} - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <div class="space-y-4">
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
                </div>

                {{-- Remember Me --}}
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                {{-- Sign In Button --}}
                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent 
                               text-sm font-medium rounded-md text-white bg-blue-600 
                               hover:bg-blue-700 focus:outline-none focus:ring-2 
                               focus:ring-offset-2 focus:ring-blue-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0
                                  012 2v5a2 2 0 01-2 2H5a2 2
                                  0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3
                                  3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Sign in
                    </button>
                </div>
                <div class="mt-6 text-center text-sm text-gray-600">
                    Belum punya akun?
                    <a href="{{ url('/register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Daftar di sini
                    </a>
                </div>

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
