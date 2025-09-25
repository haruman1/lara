<section id="showservices" class="bg-gray-50 dark:bg-neutral-900 transition-colors duration-500">
    <!-- Card Blog -->
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
                Temukan Layanan terbaru kami</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Kami memiliki berbagai
                layanan untuk memudahkan bisnis Anda.</p>
        </div>
        @if (isset($services) && $services->count() > 0)
            <div
                class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                {{-- Services Item  --}}
                @foreach ($services->take(4) as $service)
                    <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"
                            class="size-28">
                            <!-- Background putih -->
                            <rect width="128" height="128" rx="20" fill="white" />

                            <!-- Gelombang sinyal abstrak berwarna-warni -->
                            <circle cx="64" cy="64" r="10" fill="#36C5F0" />
                            <circle cx="64" cy="64" r="20" fill="none" stroke="#2EB67D"
                                stroke-width="6" />
                            <circle cx="64" cy="64" r="34" fill="none" stroke="#ECB22E"
                                stroke-width="6" />
                            <circle cx="64" cy="64" r="48" fill="none" stroke="#E01E5A"
                                stroke-width="6" />
                        </svg>



                    </div>
                    <div class="p-4 md:p-6">
                        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                            {{ $service->category->name ?? 'Uncategorized' }}
                        </span>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            {{ $service->name ?? 'Unknown Service' }}
                        </h3>
                        <p class="mt-3 dark:text-white text-gray-500 dark:text-neutral-500">
                            {{ Str::limit($service->description, 100, '...') }}
                        </p>
                    </div>
                    <div
                        class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="{{ route('page.services', ['slug' => $service->slug]) }}"
                            data-lang-key="work-button-1">
                            View sample
                        </a>
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="{{ route('page.services', ['slug' => $service->slug]) }}"
                            data-lang-key="work-button-2">
                            View API
                        </a>
                    </div>
            </div>
            <!-- End Card -->
        @endforeach
    </div>
@else
    <p class="text-center text-gray-600 dark:text-neutral-400">
        No services available.
    </p>
    @endif
    <!-- End Grid -->

    <!-- Card -->
    <div class="text-center">
        <div
            class="inline-block bg-white border border-gray-200 shadow-2xs rounded-full dark:bg-neutral-900 dark:border-neutral-800">
            <div class="py-3 px-4 flex items-center gap-x-2">
                <p class="text-gray-600 dark:text-neutral-400">
                    Mau melihat lebih banyak layanan?
                </p>
                <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                    href="{{ route('page.services') }}" target="_blank" data-lang-key="news-button">
                    Go here
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- End Card -->
</section>
