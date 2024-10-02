<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vagaRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'email_vaga' => ['required','email'],
            'titulo_vagas' => ['required','string'],
            'descrição' => ['required'],
            'inicio_salario_vagas' => ['required','numeric'],
            'fim_salario_vagas' => ['required','numeric'],
            'local_vagas' => ['required'],
            'tipo_vaga' => ['required'],
            'scala_vagas' => ['required'],
        ];
    }
    public function messages(): array
    {
        return [
            'email_vaga.required' => 'O campo email é de preenchimento obrigatorio',
            'email_vaga.email' => 'Digite um email valido',
            'titulo_vagas.required' => 'O campo titulo é de preenchimento obrigatorio',
            'titulo_vagas.string' => 'O campo titulo deve ser preenchido apenas com letras',
            'descrição.required' => 'O campo descrição é de preenchimento obrigatorio',
            'inicio_salario_vagas.required' => 'O campo salario inicial é de preenchimento obrigatorio',
            'inicio_salario_vagas.numeric' => 'O campo salario inicial deve ser preenchido apenas com numeros',
            'fim_salario_vagas.required' => 'O campo salario limite é de preenchimento obrigatorio',
            'fim_salario_vagas.numeric' => 'O campo salario limite deve ser preenchido apenas com numeros',
            'local_vagas.required' => 'O campo local é de preenchimento obrigatorio',
            'tipo_vaga.required' => 'O campo tipo é de preenchimento obrigatorio',
            'scala_vagas.required' => 'O campo escala é de preenchimento obrigatorio',
        ];
    }
}
