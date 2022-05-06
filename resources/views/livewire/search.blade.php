<div class="relative pointer-events-auto">
    <button type="button" wire:click="showSearch"
        class="w-52 md:w-72 flex items-center text-sm leading-6 text-slate-400 rounded-md ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300 dark:bg-slate-700 dark:highlight-white/5 dark:hover:bg-slate-900">
        <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-3 flex-none">
            <path d="m19 19-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"></circle>
        </svg>
        Quick search...
        <span class="ml-auto pl-3 flex-none text-xs font-semibold">Ctrl
            K</span>
    </button>
    {{-- Show-Search-Modal Start --}}
    <x-jet-dialog-modal wire:model="showSearchModal">
        <x-slot name="title">Search Movies</x-slot>
        <x-slot name="content">
            <div class="flex flex-col">
                <input wire:model="search" type="text" class="rounded w-full dark:bg-gray-700"
                    placeholder="Search Movie">
                @if(!empty($search))
                <div class="">
                    @if (!empty($searchResults))
                        @foreach ($searchResults->groupByType() as $type => $modelSearchResults)
                            <h1>{{ $type }}</h1>
                            @foreach($modelSearchResults as $searchResult)
                                <a href="{{ $searchResult->url  }}">
                                    <div
                                        class="p-2 m-2 bg-gray-200 hover:bg-gray-300 dark:bg-gray-500 dark:hover:bg-gray-700 rounded-md text-white cursor-pointer">
                                        {{
                                        $searchResult->title }}
                                    </div>
                                </a>
                            @endforeach                    
                        @endforeach
                    @else
                    <div>No Results</div>
                    @endif
                </div>
                @endif
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeSearchModal" class="bg-gray-600 hover:bg-gray-800 text-white">Close
            </x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
    {{-- Show-Search-Modal End --}}
</div>