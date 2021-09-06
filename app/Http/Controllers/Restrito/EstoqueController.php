<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;
use App\Models\Estoque;
use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Requests\EstoqueRequest;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque = Estoque::all();
        return view('restrito.estoque.index', [
            'estoque' => $estoque
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('descricao', 'id')->all();
        $produtos = Produto::pluck('nome_do_produto', 'id')->all();
        return view('restrito.estoque.form', [
            'categorias' => $categorias,
            'produtos' => $produtos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstoqueRequest $request)
    {
        $dados = $request->all();
        Estoque::create($dados);

        return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function show(Estoque $estoque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function edit(Estoque $estoque)
    {
        return view('restrito.estoque.form', [
            'estoque' => $estoque,
            'categorias' => Categoria::pluck('descricao', 'id')->all(),
            'categoriaSelecionada' => $estoque->categoria()->pluck('id')->all(),
            'produtos' => Produto::pluck('nome_do_produto', 'id')->all(),
            'produtosSelecionado' => $estoque->produto()->pluck('id')->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function update(EstoqueRequest $request, Estoque $estoque)
    {
        $dados = $request->all();
        $estoque->update($dados);
        
        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        $estoque->delete();
        return redirect('/estoque')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
