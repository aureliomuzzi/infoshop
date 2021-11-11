<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
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
            'tipo' => 'required',
            'documento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome do Cliente é obrigatório',
            'tipo.required' => 'O campo Tipo é obrigatório',
            'documento.required' => 'O campo CPF ou CNPJ é obrigatório'
        ];
    }
}
