<div class="flex justify-center gap-4 mt-4  w-full">
    <!-- GitHub -->
    <x-filament::button
        
        tag="a"
        href="{{ route('social.redirect', 'github') }}"
        icon="si-github"
        tooltip="Login dengan GitHub"
        color="gray"
        size="lg"
        class="rounded-full"
    />

    <!-- Google -->
    <x-filament::button
        tag="a"
        href="{{ route('social.redirect', 'google') }}"
        icon="si-google"
        tooltip="Login dengan Google"
        color="danger"
        size="lg"
        class="rounded-full"
    />

    <!-- X -->
    <x-filament::button
        tag="a"
        href="{{ route('social.redirect', 'twitter-oauth-2') }}"
        icon="si-x"
        tooltip="Login dengan X"
        color="black"
        size="lg"
        class="rounded-full"
    />
</div>
