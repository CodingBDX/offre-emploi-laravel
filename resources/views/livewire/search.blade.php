<div class="flex justify-content relative" x-data="{ open: true }" x-on:click.away="open = false; @this.resetIndex();"
    x-on:keydown.escape="open = false; @this.resetIndex();">
    <input type="text"
        class="px-3 py-1.5 text-base font-normal text-gray-700 bg-white focus:outline-none focus:border-red-400 border-2 w-96 rounded md:mr-5 py-1 px-2"
        @click.prevent="open = true" wire:model="query" wire:keydown.prevent.arrow-down="incrementIndex()"
        wire:keydown.prevent.arrow-up="decrementIndex()" wire:keydown.prevent.enter="showJob()"
        wire:keydown.backspace="resetIndex()">
    <button
        class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
        type="button" id="button-addon2">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
            </path>
        </svg>
    </button>
    @if (strlen($query) >= 2)
        <div class="z-10 bg-white border border-gray-400 rounded w-96 px-2 py-1 mt-10 flex flex-col absolute"
            x-show="open">
            @if (count($jobs) > 0)
                @foreach ($jobs as $index => $job)
                    <a href="#"
                        class="{{ $index === $selectedIndex ? 'text-red-400' : '' }} my-2">{{ $job['title'] }}</a>
                @endforeach
            @else
                <span>0 résultat pour "{{ $query }}"</span>
            @endif
        </div>
    @endif
</div>
