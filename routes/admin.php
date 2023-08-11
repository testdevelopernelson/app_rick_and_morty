<?php

use Illuminate\Support\Facades\Route;

    Route::group(['namespace' => 'Auth'], function(){
        Route::get('/', 'AdminLoginController@show')->name('admin.login');
    });
