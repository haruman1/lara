<x-layouts.main :title="$post->title">
    <x-banner :image="$post->getMainImage()">
        {{-- <div class="text-4xl text-white">
            <h1>
                {{ $post->title }}
                @isset($isPeekPreviewModal)
                    [Preview]
                @endisset 
                <!-- Sidebar -->
    
        {{-- </h1>
        </div> --}}
    </x-banner>

    <x-container>
        <div class="prose mt-8 mx-auto text-black">
            <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                href="{{ route('post.index') }}">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                </svg>
                Back to Blog
            </a>
            <h1>
                {{ $post->title }}
            </h1>

            <x-post-meta :post="$post" />
            @if ($post->content_blocks)
                <x-render-blocks :blocks="$post->content_blocks" />
            @endif

            <hr>



            <x-post-footer :blocks="$post->footer_blocks" />
        </div>
    </x-container>

</x-layouts.main>
