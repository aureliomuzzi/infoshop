<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Estoque;

class HomeController extends Controller
{
    public function index()
    {
        $tClientes = Cliente::count();
        $tCompras = 34;
        $tVendas = 52;
        $tEstoque = Estoque::sum('qtd_atual');

        return view('restrito.home', [
            'tClientes' => $tClientes,
            'tCompras' => $tCompras,
            'tVendas' => $tVendas,
            'tEstoque' => $tEstoque,
        ]);
    }
}
