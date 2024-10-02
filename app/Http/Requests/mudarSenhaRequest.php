<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MudarSenhaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nova_senha' => ['required', 'min:8'],
            'confirmar_nova_senha' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'nova_senha.required' => 'O campo nova senha é obrigatório.',
            'nova_senha.min' => 'A senha precisa ter no mínimo 8 caracteres.',
            'confirmar_nova_senha.required' => 'O campo confirmar nova senha é obrigatório.'
        ];
    }
}

