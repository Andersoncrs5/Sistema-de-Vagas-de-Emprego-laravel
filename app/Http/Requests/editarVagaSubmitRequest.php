<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editarVagaSubmitRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'email_vaga' => ['required','email','min:10'],
            'titulo_vagas' => ['required','string','min:5'],
            'descrição' => ['required','min:10'],
            'inicio_salario_vagas' => ['required','integer'],
            'fim_salario_vagas' => ['required','integer'],
            'local_vagas' => ['required','string'],
            'tipo_vaga' => ['required'],
            'scala_vagas' => ['required'],
            'ferramenta_vaga' => ['required'],
            'estado_vaga' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'email_vaga.required' => 'O campo email é obrigatório.',
            'email_vaga.email' => 'O email digitado não é válido.',
            'email_vaga.min' => 'O email precisa ter pelo menos 10 caracteres.',

            'titulo_vagas.required' => 'O campo título é obrigatório.',
            'titulo_vagas.string' => 'O título precisa ser uma string.',
            'titulo_vagas.min' => 'O título precisa ter pelo menos 5 caracteres.',

            'descrição.required' => 'O campo descrição é obrigatório.',
            'descrição.min' => 'A descrição precisa ter pelo menos 10 caracteres.',

            'inicio_salario_vagas.required' => 'O campo salário inicial é obrigatório.',
            'fim_salario_vagas.required' => 'O campo salário limite é obrigatório.',

            'local_vagas.required' => 'O campo local é obrigatório.',
            'local_vagas.string' => 'O local precisa ser uma string.',

            'tipo_vaga.required' => 'O campo tipo de vaga é obrigatório.', 
            'scala_vagas.required' => 'O campo escala é obrigatório.',
            'ferramenta_vaga.required' => 'O campo ferramentas necessárias é obrigatório.',
            'estado_vaga.required' => 'O campo estado da vaga é obrigatório.'
        ];
    }
}
