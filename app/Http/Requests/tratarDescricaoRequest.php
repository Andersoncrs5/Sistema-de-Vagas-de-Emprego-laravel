<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tratarDescricaoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'descricao_usuarios' => ['required'],
            
        ];
    }
    public function messages(): array
    {
        return [
            'descricao_usuarios.required' => 'O campo nova descricao é obrigatório.',
        ];
    }

}
