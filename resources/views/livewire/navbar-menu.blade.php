<div class="flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
    @foreach ($menus as $menu)
        @include('livewire.partials.nav-item', ['menu' => $menu])
    @endforeach
</div>
