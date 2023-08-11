@extends('layouts.master')
@section('content')
    <main> 
        <div class="container ml-auto mr-auto flex flex-wrap items-start mt-20">
            <div class="w-full pl-2 pr-2 mb-4 mt-4">
            <h1 class="text-3xl font-extrabold text-center">Mi cuenta</h1>
            </div>
        </div>
        <div class="container ml-auto mr-auto flex items-center justify-center">
            <div class="w-full md:w-1/2">

            <!-- Formulario -->
            <form action="{{ route('account.update_profile', $user->id) }}" method="post" class="bg-white px-8 pt-6 pb-8 mb-4 shadow-xl shadow-gray">
                @csrf
                @include('_partials.messages')
                <span class="mb-10">Los campos marcados con <strong>*</strong> son requeridos</span>
                <hr>
                <div class="mb-4">
                    <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                        <div class="sm:col-span-4 justify-center">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Nombre *" value="{{ $user->name }}">
                        @if ($errors->has('name'))
                            <p class="text-red-600">{{ $errors->first('name') }}</p>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" name="address" placeholder="Dirección *"  value="{{ $user->address }}">
                    @if ($errors->has('address'))
                        <p class="text-red-600">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" name="city" placeholder="Ciudad *"  value="{{ $user->city }}">
                    @if ($errors->has('city'))
                        <p class="text-red-600">{{ $errors->first('city') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="date" name="birthdate" placeholder="Fecha de nacimiento *"  value="{{ $user->birthdate }}">
                    @if ($errors->has('birthdate'))
                        <p class="text-red-600">{{ $errors->first('birthdate') }}</p>
                    @endif
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Actualizar </button>
                </div>
                <input type="hidden" value="{{ $user->id }}">
                <input type="hidden" value="update" name="_action">
            </form>
            </div>
        </div>   
    </main>
@endsection