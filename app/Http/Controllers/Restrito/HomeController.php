<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

class HomeController extends Controller
{
    public function index()
    {
        $tClientes = Cliente::count();
        $tCompras = 34;
        $tVendas = 52;
        $tEstoque = 338;
        return view('restrito.home', [
            'tClientes' => $tClientes,
            'tCompras' => $tCompras,
            'tVendas' => $tVendas,
            'tEstoque' => $tEstoque
        ]);
    }
}
