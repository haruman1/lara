<div x-data x-init="const swiper = new Swiper($refs.container, {
    loop: true,
    autoplay: { delay: 4000 },
    pagination: { el: $refs.pagination, clickable: true },
    navigation: { nextEl: $refs.next, prevEl: $refs.prev },
});" class="relative w-full max-w-3xl mx-auto">
    <!-- Slider Container -->
    <div class="swiper" x-ref="container">
        <div class="swiper-wrapper">
            @foreach ($testimonials as $t)
                <div class="swiper-slide">
                    <div class="flex flex-col items-center text-center bg-white shadow-lg p-6 rounded-2xl">
                        <img src="{{ $t['photo'] }}" alt="{{ $t['name'] }}"
                            class="w-20 h-20 rounded-full shadow mb-4">
                        <p class="text-gray-700 italic mb-4">“{{ $t['message'] }}”</p>
                        <h4 class="font-semibold text-lg">{{ $t['name'] }}</h4>
                        <span class="text-sm text-gray-500">{{ $t['role'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Controls -->
    <div class="absolute inset-0 flex items-center justify-between px-4">
        <button x-ref="prev" class="p-2 bg-white rounded-full shadow hover:bg-gray-100">‹</button>
        <button x-ref="next" class="p-2 bg-white rounded-full shadow hover:bg-gray-100">›</button>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-4">
        <div class="swiper-pagination" x-ref="pagination"></div>
    </div>
</div>
