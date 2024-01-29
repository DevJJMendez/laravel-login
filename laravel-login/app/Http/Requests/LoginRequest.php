<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|min:6|email',
            'password' => 'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Debe ingresar el email',
            'email.min' => 'Debe tener al menos 6 caracteres',
            'password.required' => 'Debe ingresar la contraseña',
            'password.min' => 'La longitud debe ser de al menos 4 caracteres'
        ];
    }
}
