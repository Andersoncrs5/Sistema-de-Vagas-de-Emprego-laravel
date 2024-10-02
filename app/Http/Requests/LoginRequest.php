<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'email_usuario' => ['required','email'],
            'senha_usuario' => ['required']
        ];
    }
    public function messages(){
        return [
            'email_usuario.required' => 'O campo Email é de preenchimento obrigatorio',
            'email_usuario.email' => 'Digite um emal valido',
            'senha_usuario.required'  => 'O campo senha é de preenchimento obrigatorio',
        ];
    }
}
