<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paginacaoDinamicaSubmitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'numero_itens' => ['required',"numeric",'between:5,30']
        ];
    }
    public function messages(): array
    {
        return [
            'numero_itens.required' => 'O campo Numero de itens é obrigatório.',
            'numero_itens.numeric' => 'O campo Numero de itens so aceita valores numericos ',
            'numero_itens.between' => 'O campo Numero de itens so aceita valores entre 5 a 30',
        ];
    }
}
