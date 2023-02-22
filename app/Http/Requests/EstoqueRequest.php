<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EstoqueRequest extends FormRequest
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
            'produto_id' => 'required',
            'categoria_id' => 'required',
            'qtd_min' => 'required',
            'qtd_max' => 'required',
            'qtd_atual' => 'required',
            'vl_unitario' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'produto_id.required' => 'O campo Nome do Produto é obrigatório',
            'categoria_id.required' => 'O campo Categoria do Produto é obrigatório',
            'qtd_min.required' => 'O campo Quantidade Minima é obrigatório',
            'qtd_max.required' => 'O campo Quantidade Maxima é obrigatório',
            'qtd_atual.required' => 'O campo Quantidade Atual é obrigatório',
            'vl_unitario.required' => 'O campo Valor Unitario é obrigatório'            
        ];
    }
}
