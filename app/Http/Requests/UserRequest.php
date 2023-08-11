<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules= [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'birthdate' => 'required',
        ];

        if(!isset(request()->_action)){
            $rules['email'] = 'required|email|unique:users';
            $rules['password'] = 'required';
            $rules['password_confirmation'] = 'same:password';
        }

        return $rules;
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es requerido',
            'address.required' => 'La dirección es requerida',
            'city.required' => 'La ciudad es requerida',
            'birthdate.required' => 'La fecha de nacimiento es requerida',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'Ingrese un correo válido',
            'email.unique' => 'El correo electronico ya está registrado',
            'password.required' => 'La contraseña es requerida',            
            'password_confirmation.same' => 'Las contraseñas no coinciden'
        ];
    }
}
