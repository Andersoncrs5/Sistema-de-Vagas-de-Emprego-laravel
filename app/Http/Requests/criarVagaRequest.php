<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class criarVagaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email_vaga' => ['required',"email"],
            'titulo_vagas' => ['required','alpha'],
            'senioridade_vagas' => ['required'],
            'descrição' => ['required'],
            'inicio_salario_vagas' => ['required','numeric'],
            'fim_salario_vagas' => ['required','numeric'],
            'local_vagas' => ['required','alpha'],
            'tipo_vaga' => ['required'],
            'scala_vagas' => ['required'],
            'ferramenta_vaga' => ['required'],
            'estado_vaga' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'email_vaga.required' => 'O campo de email da vaga é obrigatório.',
            'email_vaga.email' => 'Por favor, insira um email válido para a vaga.',
            'titulo_vagas.required' => 'O título da vaga é obrigatório.',
            'titulo_vagas.alpha' => 'O título da vaga deve conter apenas letras.',
            'senioridade_vagas.required' => 'A senioridade da vaga é obrigatória.',
            'descrição.required' => 'A descrição da vaga é obrigatória.',
            'inicio_salario_vagas.required' => 'O campo de salário inicial é obrigatório.',
            'inicio_salario_vagas.numeric' => 'O salário inicial deve ser um número.',
            'fim_salario_vagas.required' => 'O campo de salário final é obrigatório.',
            'fim_salario_vagas.numeric' => 'O salário final deve ser um número.',
            'local_vagas.required' => 'O campo de localização da vaga é obrigatório.',
            'local_vagas.alpha' => 'A localização da vaga deve conter apenas letras.',
            'tipo_vaga.required' => 'O tipo de vaga é obrigatório.',
            'scala_vagas.required' => 'O campo de escala da vaga é obrigatório.',
            'ferramenta_vaga.required' => 'O campo de ferramenta da vaga é obrigatório.',
            'estado_vaga.required' => 'O campo de estado da vaga é obrigatório.',
        ];
    }
}
