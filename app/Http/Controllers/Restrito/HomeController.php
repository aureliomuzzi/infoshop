<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('restrito.home');
    }
}
