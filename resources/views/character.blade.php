
@extends('layouts.master')
@section('content')
<div class="grid place-items-center mt-10">
<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-100 md:h-auto md:w-100 md:rounded-none md:rounded-l-lg" src="{{ $character->image }}" alt="">
    <div class="flex w-full flex-col justify-between p-4 leading-normal md:w-300">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $character->name }}</h5>
       <h6>Estado: <strong>{{ $character->status }}</strong></h6>
       <h6>Especie: <strong>{{ $character->species }}</strong></h6>
       <h6>Género: <strong>{{ $character->gender }}</strong></h6>
       <h6>Origen: <strong>{{ $character->origin->name }}</strong></h6>
       <h6>Ubicación: <strong>{{ $character->location->name }}</strong></h6>
    </div>
</a>
</div>
@endsection