<?php

namespace App\Http\Controllers\Restrito;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('restrito.index');
    }
}
