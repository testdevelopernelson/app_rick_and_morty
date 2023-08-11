<div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a class="mt-10 flex justify-center" href="{{ route('character', $item->id) }}">
        <img class=" rounded-t-lg " src="{{ $item->image }}" alt="" />
    </a>
    <div class="p-5">
        <a href="{{ route('character', $item->id) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->name }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ $item->location->name }}
        </p>
        <div class="flex justify-between">
            <a href="{{ route('character', $item->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Leer más
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            @if(in_array($item->id, $favorites))
                <a href="{{ route('delete_from_favorites', $item->id)}}">
                    <img src="{{ asset('img/heart.png') }}" width="32" />
                </a>
            @else
                <a href="{{ route('add_to_favorites', $item->id)}}">
                    <img src="{{ asset('img/heart.svg') }}" alt="" />
                </a>
            @endif
        </div>
    </div>
</div>