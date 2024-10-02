<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cadastroRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'nome_usuario' => ['string','required','max:140'],
            'email_usuario' => ['email','required','max:200','unique:usuarios,email_usuario'],
            'senha_usuario' => ['required','max:200','min:8'],
            'cpf_usuario' => ['required','numeric','unique:usuarios,cpf_usuario'],
            'data_nasc_usuario' => ['required','date'],
            'sexo_usuario' => ['required'],
            'estado_usuario' => ['required'],
            'area_usuario' => ['required'],
            'nivel_usuario' => ['required'],
            'ferramenta_favorita_usuario' => ['required','alpha'],
        ];
    }
    public function messages()
    {
        return [
            'nome_usuario.required' => 'O campo nome é obrigatorio',
            'nome_usuario.string' => 'O campo nome deve conter apenas letras',
            'nome_usuario.max' => 'o maximo de caracteres permitidos para o campo nome é 140',
            'email_usuario.required' => 'O campo email é de preenchimento obrigatorio',
            'email_usuario.email' => 'Digite um email valido',
            'email_usuario.max' => 'O maximo de caracteres permitidos para o campo email é 200',
            'email_usuario.unique' => 'O email ja esta em uso',
            'senha_usuario.required' => 'O campo senha é de preenchimento obrigatorio',
            'senha_usuario.max' => 'O maximo de caracteres permitidos é 200',
            'senha_usuario.min' => 'O minimo de caracteres permitido é 8',
            'cpf_usuario.required' => 'O campo CPF é de preenchimento obrigatorio',
            'cpf_usuario.numeric' => 'Somente é permitido dados do tipo inteiro',
            'cpf_usuario.size' => 'O campo CPF deve conter apenas 11 caracteres do tipo inteiro',
            'cpf_usuario.unique' => 'CPF ja cadastrado',
            'data_nasc_usuario.required' => 'O campo data de nascimento é de preenchimento obrigatorio',
            'data_nasc_usuario.date' => 'digite uma data valida',
            'sexo_usuario.required' => 'O campo sexo é de preenchimento obrigatorio',
            'estado_usuario' => 'O campo estado é de preenchimento obrigatorio',
            'area_usuario' => 'O campo area é de preenchimento obrigatorio',
            'nivel_usuario.required' => 'O campo senioridade é de preenchimento obrigatorio',
            'ferramenta_favorita_usuario.required' => 'O campo Ferramenta é de preenchimento obrigatorio',
            'ferramenta_favorita_usuario.alpha' => 'O campo Ferramenta so aceita letras'
        ];
    }
}
