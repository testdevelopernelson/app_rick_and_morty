<?php

namespace App\Http\Controllers\Auth;

use App\Models\{User};
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function login(LoginRequest $request) {
        $credentials = $request->except(['_token']); 
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        
        session()->flash('flash.failure', 'Usuario y/o la contraseña incorrectos');

        return redirect()->route('login');
    }

    public function logout() {
        auth()->guard('web')->logout();

        return redirect()->route('login');
    }

}