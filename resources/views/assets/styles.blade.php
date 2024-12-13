@if (filled(config('livewire-powergrid.plugins.flatpickr.css')))
    <link
        rel="stylesheet"
        href="{{ config('livewire-powergrid.plugins.flatpickr.css') }}"
    >
@endif
{{-- Alpine Plugins--}}
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/sort@3.x.x/dist/cdn.min.js"></script>
@isset($cssPath)
    <style>
        {!! file_get_contents($cssPath) !!}
    </style>
@endisset
