@extends('layouts.master')
@section('content')
<main> 
    <div class="container ml-auto mr-auto flex flex-wrap items-start mt-20">
        <div class="w-full pl-2 pr-2 mb-4 mt-4">
        <h1 class="text-3xl font-extrabold text-center">Login</h1>
        </div>
    </div>
    <div class="container ml-auto mr-auto flex items-center justify-center">
        <div class="w-full md:w-1/2">

        <!-- Formulario -->
        <form action="{{ route('login') }}" method="post" class="bg-white px-8 pt-6 pb-8 mb-4 shadow-xl shadow-gray">
            @csrf
            @include('_partials.messages')
            <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                    <div class="sm:col-span-4 justify-center">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nya">Usuario</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nya" type="text" name="email">
                    @if ($errors->has('email'))
                        <p class="text-red-600">{{ $errors->first('email') }}</p>
                    @endif
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto">Contraseña</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="password" name="password">
                @if ($errors->has('password'))
                    <p class="text-red-600">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Ingresar </button>
                <a href="{{ route('account.register') }}" class="color-gray underline">Registrarse</a>
            </div>
        </form>
        </div>
    </div>   
</main>
@endsection