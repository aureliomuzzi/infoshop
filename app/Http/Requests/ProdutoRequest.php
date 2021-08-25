<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProdutoRequest extends FormRequest
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
            'nome_do_produto' => 'required',
            'descricao_do_produto' => 'required',
            'referencia_do_produto' => 'required',
            'imagem_do_produto' => 'required',
            'categoria_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome_do_produto.required' => 'O campo Nome do Produto é obrigatório',
            'descricao_do_produto.required' => 'O campo Descrição do Produto é obrigatório',
            'referencia_do_produto.required' => 'O campo Referência do Produto é obrigatório',
            'imagem_do_produto.required' => 'O campo Imagem do Produto é obrigatório',
            'categoria_id.required' => 'O campo Categoria do Produto é obrigatório',
        ];
    }
}
