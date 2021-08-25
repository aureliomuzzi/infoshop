<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(10);
        return view('restrito.produtos.index', [
            'produtos' => $produtos
        ]);
    }

    public function create()
    {
        return view('restrito.produtos.form');
    }

    public function store(ProdutoRequest $request)
    {
        $dados = $request->all();
        Produto::create($dados);

        return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
