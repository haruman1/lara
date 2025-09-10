@props(['post'])

@if ($post->published_at)
    <div class="flex items-center gap-x-5">
        <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
            href="{{ route('post.index', ['category' => $post->category->slug]) }}">
            {{ $post->category->name }}
        </a>
        <p class="text-xs sm:text-sm text-gray-800 dark:text-neutral-500">{{ $post->published_at->format('M jS, Y') }}
        </p>
    </div>
@else
    <div class="flex items-center gap-x-5">
        <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
            href="{{ route('post.index', ['category' => $post->category->slug]) }}">
            [Not published]
        </a>
        <p class="text-xs sm:text-sm text-gray-800 dark:text-neutral-200">{{ $post->published_at->format('M jS, Y') }}
        </p>
    </div>
@endif
