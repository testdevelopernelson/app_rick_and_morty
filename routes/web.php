<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web', 'xss']], function () {
    Route::get('/login', 'AccountController@login')->name('login');
    Route::get('registro-usuario', 'AccountController@register')->name('account.register');
    Route::post('guardar-usuario', 'AccountController@createUser')->name('account.create_user');
    
    Route::post('/login', 'Auth\LoginController@login')->name('auth.login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', 'FrontController@home')->name('home');
        Route::get('ver-personaje/{id}', 'FrontController@character')->name('character');
        Route::get('/perfil', 'AccountController@profile')->name('account.profile');
        Route::post('actualizar-perfil/{id}', 'AccountController@updateProfile')->name('account.update_profile');
        Route::get('favoritos', 'FrontController@favorites')->name('favorites');
        Route::get('agregar-favoritos/{id}', 'FrontController@addToFavorite')->name('add_to_favorites');
        Route::get('eliminar-favoritos/{id}', 'FrontController@deleteFromFavorite')->name('delete_from_favorites');
    });

});
