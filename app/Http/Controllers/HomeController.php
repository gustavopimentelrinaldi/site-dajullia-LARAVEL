<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diario;
use App\Models\Recado;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
