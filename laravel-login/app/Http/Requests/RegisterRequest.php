<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => 'required|min:3',
            'email' => 'required|min:6|email|unique:users,email',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar el nombre',
            'name.min' => 'La longitud debe ser de al menos 3 caracteres',
            'email.required' => 'Debe ingresar el email',
            'email.min' => 'Debe tener al menos 6 caracteres',
            'password.required' => 'Debe ingresar la contraseña',
            'password.min' => 'La longitud debe ser de al menos 4 caracteres',
            'password_confirmation.required' => 'Debe ingresar la contraseña',
            'password_confirmation.min' => 'La longitud debe ser de al menos 4 caracteres'
        ];
    }
}
