
@extends('layouts.master')
@section('content')
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">{{ $titleInHome }}</h1>
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 ">
    @foreach ($characters as $item)
        @include('_partials.character')
    @endforeach
</div>
@if(isset($settingsPaginate))
<div class="flex flex-col items-center">
    <!-- Buttons -->
    <div class="inline-flex mt-2 xs:mt-0">
        @if($settingsPaginate->prev)
            <button onClick="window.location.href='{{ url()->current() . '?page='  . $settingsPaginate->page_prev }}'" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Anterior
            </button>
        @endif
        @if($settingsPaginate->next)
            <button onClick="window.location.href='{{ url()->current() . '?page=' . $settingsPaginate->page_next }}'" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Siguiente
            </button>
        @endif
    </div>
  </div>
  @endif
@endsection