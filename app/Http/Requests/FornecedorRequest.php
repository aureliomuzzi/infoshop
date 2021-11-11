<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'status' =>'required',
            'tipo' => 'required',
            'documento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome do Fornecedor é obrigatório',
            'status.required' => 'O campo Status é obrigatório',
            'tipo.required' => 'O Tipo de Pessoa é obrigatório',
            'documento.required' => 'O número de CPF ou CNPJ é obrigatório',
        ];
    }
}
