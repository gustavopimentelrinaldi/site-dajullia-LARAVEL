<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diario;

class DiarioController extends Controller
{
    public function index()
    {
        $notas = Diario::orderBy('created_at', 'desc')->get();
        return view('diario', compact('notas'));
    }

    public function criar(Request $request)
    {
        
        $nota = new Diario();
        $nota->assunto = $request->assunto;
        $nota->texto = $request->texto;
       
        $nota->save();

        return response()->json($nota);
    }
}
