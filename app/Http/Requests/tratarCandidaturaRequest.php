<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tratarCandidaturaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email_vaga' => ['required','email'],
            'telefone_candidatos' => ['required','tel']
        ];
    }
    public function messages(): array
    {
        return [
            'email_vaga.required' => "O campo email é obrigatorio",
            'email_vaga.email' => 'Digite um email valido',
            'telefone_candidatos.required' => 'O campo telefone é obrigatorio',
            'telefone_candidatos.tel' => 'Digite um numero valido',
        ];
    }
}
