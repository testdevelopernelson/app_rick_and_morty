@extends('layouts.master')
@section('content')
    <main> 
        <div class="container ml-auto mr-auto flex flex-wrap items-start mt-20">
            <div class="w-full pl-2 pr-2 mb-4 mt-4">
            <h1 class="text-3xl font-extrabold text-center">Registro</h1>
            </div>
        </div>
        <div class="container ml-auto mr-auto flex items-center justify-center">
            <div class="w-full md:w-1/2">

            <!-- Formulario -->
            <form action="{{ route('account.create_user') }}" method="post" class="bg-white px-8 pt-6 pb-8 mb-4 shadow-xl shadow-gray">
                @csrf
                @include('_partials.messages')
                <span class="mb-10">Los campos marcados con <strong>*</strong> son requeridos</span>
                <div class="mb-4">
                    <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                        <div class="sm:col-span-4 justify-center">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Nombre *" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <p class="text-red-600">{{ $errors->first('name') }}</p>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" name="address" placeholder="Dirección *" value="{{ old('address') }}">
                    @if ($errors->has('address'))
                        <p class="text-red-600">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" name="city" placeholder="Ciudad *" value="{{ old('city') }}">
                    @if ($errors->has('city'))
                        <p class="text-red-600">{{ $errors->first('city') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="date" name="birthdate" placeholder="Fecha de nacimiento *" value="{{ old('birthdate') }}">
                    @if ($errors->has('birthdate'))
                        <p class="text-red-600">{{ $errors->first('birthdate') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" name="email" placeholder="Correo electrónico *" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <p class="text-red-600">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="columns-2">
                    <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" autocomplete="new-password" placeholder="Contraseña *">
                        
                    </div>
                    <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password_confirmation" placeholder="Confirmar Contraseña *">
                    </div>
                </div> 
                @if ($errors->has('password_confirmation'))
                    <p class="text-red-600 mb-10">{{ $errors->first('password_confirmation') }}</p>
                @endif
                @if ($errors->has('password'))
                    <p class="text-red-600 mb-10">{{ $errors->first('password') }}</p>
                @endif
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Guardar </button>
                    <a href="{{ route('login') }}" class="color-gray underline">Login</a>
                </div>
            </form>
            </div>
        </div>   
    </main>
@endsection