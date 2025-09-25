@if ($getState())
    {!! app(\BladeUI\Icons\Factory::class)->svg($getState())->toHtml() !!}
@else
    <span class="text-gray-400">Belum ada icon dipilih</span>
@endif
