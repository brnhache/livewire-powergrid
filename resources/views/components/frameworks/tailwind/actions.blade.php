<div class="md:flex md:flex-row w-full">
    <div>
        <x-livewire-powergrid::frameworks.tailwind.header.actions
            :theme="$theme"
            :actions="$this->headers"
        />
    </div>
    <div class="flex flex-row justify-center items-center text-sm">
        @if (count($exportOptions) > 0)
            <div class="">
                @include(powerGridThemeRoot() . '.export')
            </div>
        @endif
        @includeIf(powerGridThemeRoot() . '.toggle-columns')
    </div>

    <!-- LOADING -->
    @include(powerGridThemeRoot() . '.loading')
</div>
