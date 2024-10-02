<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdicionandoComentarioRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'comentario_comentario' => ['required'],
        ];
    }
    public function messages(): array
    {
        return [
            'comentario_comentario.required' => 'O campo comentario é de preenchimento obrigatorio',
        ];
    }
}
