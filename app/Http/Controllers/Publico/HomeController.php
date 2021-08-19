<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('publico.home');
    }
}
