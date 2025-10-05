<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100 dark:bg-neutral-900">

<head>

    <title>{{ $seoTitle ?? 'Bcomptech Solutions Sign In' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $seoDescription ?? 'Default description' }}">
    <meta name="keywords" content="{{ $seoKeywords ?? '' }}">

    <link rel="icon" type="image/x-icon" href="/images/icon/favicon.ico" id="favicon_.ico">
    <link rel="icon" type="image/svg+xml" href="/images/icon/favicon.ico" id="favicon_.svg">
    <link rel="shortcut icon" href="/images/icon/favicon.ico" id="favicon_.ico">
    <link rel="apple-touch-icon" href="/images/icon/favicon.ico" id="favicon_apple">
    <!-- Open Graph -->
    <meta property="og:title" content="{{ $seoOgTitle ?? '' }}">
    <meta property="og:description" content="{{ $seoOgDescription ?? '' }}">
    <meta property="og:type" content="{{ $seoOgType ?? 'website' }}">
    <meta property="og:url" content="{{ $seoOgUrl ?? url()->current() }}">
    <meta property="og:image" content="{{ $seoOgImage ?? asset('default-og.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="{{ $seoTwitterCard ?? 'summary' }}">
    <meta name="twitter:title" content="{{ $seoTwitterTitle ?? '' }}">
    <meta name="twitter:description" content="{{ $seoTwitterDescription ?? '' }}">
    <meta name="twitter:image" content="{{ $seoTwitterImage ?? asset('default-twitter.png') }}">
    @vite(['resources/css/prelineui.css', 'resources/js/auth/login.js', 'resources/js/app.js'])
</head>

<body class="h-full">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-5 text-center text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Bcomptech
                Solutions <span
                    class="mt-6 text-center text-3xl font-bold tracking-tight text-blue-600 dark:text-blue-500"
                    data-lang-key="sign-in">Sign
                    In</span>

            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-neutral-400">
                Welcome back! Please sign in to your account.
            </p>

        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white" data-lang-key="sign-in">Sign
                            in</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400" data-lang-key="sign-in-sub">
                            Don't have an account yet?
                            <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                                href="{{ route('signup') }}">
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
                                <svg class="shrink-0 size-3.5" width="48" height="50" viewBox="0 0 48 50"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.5665 20.7714L46.4356 0H42.2012L26.6855 18.0355L14.2931 0H0L18.7397 27.2728L0 49.0548H4.23464L20.6196 30.0087L33.7069 49.0548H48L28.5655 20.7714H28.5665ZM22.7666 27.5131L5.76044 3.18778H12.2646L42.2032 46.012H35.699L22.7666 27.5142V27.5131Z"
                                        fill="currentColor"></path>
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
                        @if (session('error'))
                            <p class="text-xs text-red-600 mt-2">{{ session('error') }}</p>
                        @endif
                        <!-- Form -->
                        <form method="POST" action="{{ route('login.post') }}">
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
                                    @if ($errors->has('email'))
                                        <p class="text-xs text-red-600 mt-2">{{ $errors->first('email') }}</p>
                                    @else
                                        <p class="hidden text-xs text-red-600 mt-2">Please include a valid email
                                            address
                                            so we can get back to you</p>
                                    @endif
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex flex-wrap justify-between items-center gap-2">
                                        <label for="password"
                                            class="block text-sm mb-2 dark:text-white">Password</label>
                                        <button type="button" id="forgotOpenModalBtn"
                                            class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                                            aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-modal-recover-account"
                                            data-hs-overlay="#hs-modal-recover-account">Forgot password?</button>

                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm 
           focus:border-blue-500 focus:ring-blue-500 
           disabled:opacity-50 disabled:pointer-events-none 
           dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 
           dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            required aria-describedby="password-error">

                                        <!-- Tombol toggle -->
                                        <button type="button" id="togglePassword"
                                            class="absolute inset-y-0 end-0 flex items-center pe-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                            <!-- icon mata -->
                                            <svg id="eyeOpen" class="w-5 h-5" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path
                                                    d="M1.5 12s4.5-7.5 10.5-7.5S22.5 12 22.5 12s-4.5 7.5-10.5 7.5S1.5 12 1.5 12z" />
                                                <circle cx="12" cy="12" r="3" />
                                            </svg>
                                            <!-- icon mata dicoret -->
                                            <svg id="eyeClosed" class="w-5 h-5 hidden" fill="none"
                                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path
                                                    d="M17.94 17.94A10.94 10.94 0 0 1 12 19.5c-6 0-10.5-7.5-10.5-7.5a21.9 21.9 0 0 1 5.06-5.94M9.88 9.88A3 3 0 0 1 12 9c1.66 0 3 1.34 3 3a3 3 0 0 1-.88 2.12M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="text-xs text-red-600 mt-2">{{ $errors->first('password') }}</p>
                                    @else
                                        <p class="hidden text-xs text-red-600 mt-2">Password required</p>
                                    @endif
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

    @extends('auth.recover')
</body>
{{-- Social Login --}}

{{-- Floating Button Component --}}
<livewire:components.float-button />

</html>
