@extends('auth.layouts.app')
@section('form')    
<main> 
    <div class="container ml-auto mr-auto flex flex-wrap items-start mt-20">
        <div class="w-full pl-2 pr-2 mb-4 mt-4">
        <h1 class="text-3xl font-extrabold text-center">Iniciar sesión</h1>
        </div>
    </div>
    <div class="container ml-auto mr-auto flex items-center justify-center">
        <div class="w-full md:w-1/2">

        <!-- Formulario -->
        <form class="bg-white px-8 pt-6 pb-8 mb-4 shadow-xl shadow-gray">
            <div class="mb-4">
            <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                <div class="sm:col-span-4 justify-center">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nya">Usuario</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nya" type="text" placeholder="Email" required>
                </div>
            </div>
            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto">Contraseña</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" placeholder="Ingrese la contraseña" required>
            </div>
            <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Ingresar </button>
            </div>
        </form>
        </div>
    </div>   
</main>
@endsection