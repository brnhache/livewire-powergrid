<div>
    @includeIf(data_get($setUp, 'header.includeViewOnTop'))
    <div class="mb-1 w-full items-center justify-between md:flex md:flex-row">
        <div class="w-full flex flex-row gap-1">
            @if (data_get($setUp, 'exportable'))
                <div class="sm:mt-0" id="pg-header-export">
                    @include(powerGridThemeRoot() . '.header.export')
                </div>
            @endif
            @includeIf(powerGridThemeRoot() . '.header.toggle-columns')
            @includeIf(powerGridThemeRoot() . '.header.soft-deletes')
            @if (config('livewire-powergrid.filter') == 'outside' && count($this->filters()) > 0)
                @includeIf(powerGridThemeRoot() . '.header.filters')
            @endif
            @include(powerGridThemeRoot() . '.header.actions')
        </div>
        @includeWhen(boolval(data_get($setUp, 'header.wireLoading')), powerGridThemeRoot() . '.header.loading')
        @include(powerGridThemeRoot() . '.header.search')
    </div>
</div>

@includeIf(powerGridThemeRoot() . '.header.enabled-filters')

@include(powerGridThemeRoot() . '.header.batch-exporting')
@include(powerGridThemeRoot() . '.header.multi-sort')
@includeIf(data_get($setUp, 'header.includeViewOnBottom'))
@includeIf(powerGridThemeRoot() . '.header.message-soft-deletes')
</div>
