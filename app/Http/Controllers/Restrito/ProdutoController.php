<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Requests\ProdutoRequest;
use App\Services\UploadService;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with('categoria')->paginate(10);
        return view('restrito.produtos.index', [
            'produtos' => $produtos
        ]);
    }

    public function create()
    {
        $categorias = Categoria::pluck('descricao', 'id')->all();
        return view('restrito.produtos.form', [
            'categorias' => $categorias
        ]);
    }

    public function store(ProdutoRequest $request)
    {
        $dados = $request->all();
        $dados['imagem_do_produto'] = UploadService::upload($dados['imagem_do_produto']);
        Produto::create($dados);

        return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        return view('restrito.produtos.form', [
            'produto' => $produto
        ]);
    }

    public function update(ProdutoRequest $request, Produto $produto)
    {
        $dados = $request->all();
        $produto->update($dados);
        
        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect('/produtos')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
