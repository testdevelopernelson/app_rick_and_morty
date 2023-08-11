<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class AccountController extends Controller{

    public function login(){

        return view('account.login');
    }

    public function register(){
       
        return view('account.register');
    }

    public function profile(){
        $user= auth()->user();

        return view('account.profile', compact('user'));
    }

    public function createUser(UserRequest $request){
        $data= $request->all();
        User::create($data);

        session()->flash('flash.success', 'El usuario se ha creado exitósamente');

        return redirect()->route('account.register');
    }

    public function updateProfile(UserRequest $request, $id){
        $data= $request->all();
        $user= User::find($id)->update($data);
        if($user){
            session()->flash('flash.success', 'Infromación actualizada exitósamente');
        }else{
            session()->flash('flash.failure', 'Ocurrió un error un error al intentar actualizar la infromación');
        }

        return redirect()->route('account.profile');
    }

}