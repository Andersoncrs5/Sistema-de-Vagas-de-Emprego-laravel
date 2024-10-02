<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editarPerfilSubmitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome_usuario' => ['required','string'],
            'sexo_usuario' => ['required'],
            'estado_usuario' => ['required'],
            'area_usuario' => ['required'],
            'ferramenta_favorita_usuario' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome_usuario.required' => 'O nome é obrigatório.',
            'nome_usuario.string' => 'O nome precisa ser uma string.',
            'sexo_usuario.required' => 'O sexo é obrigatório.',
            'estado_usuario.required' => 'O estado é obrigatório.',
            'area_usuario.required' => 'A área é obrigatória.',
            'ferramenta_favorita_usuario.required' => 'Ferramenta é de preenchimento obrigatorio'
        ];
    }
}
