@props(['post'])

<div>
    <a class="group relative block rounded-xl focus:outline-hidden"
        href="{{ route('post.show', ['slug' => $post->slug]) }}">
        <div
            class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
            <img class="size-full absolute top-0 start-0 object-cover" src="{{ $post->getMainImage() }}" alt=""
                loading="lazy">
        </div>
        <div class="absolute bottom-0 inset-x-0 z-10">
            <div class="flex flex-col h-full p-4 sm:p-6">
                <h3
                    class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80 group-focus:text-white/80">
                    {{ $post->title }}
                </h3>
                <p class="mt-3 text-white/80">
                    {{ $post->published_at ? 'Published on ' . $post->published_at->format('M jS, Y') : '[Not published]' }}
                    In - {{ $post->category->name }}

                </p>
            </div>
        </div>
        {{-- <h2 class="mt-3 text-xl">{{ $post->title }}</h2> --}}
    </a>

</div>
