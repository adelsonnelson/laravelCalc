<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
    public function somar(Request $request){
        $quantidade = $request->input('quantidade');
        return view('formSomar', $data = ['quantidade' => $quantidade]);
    }    
    public function calcularSoma(Request $request){
        $quantidade = $request->input('quantidade');
        $resultado = 0;
        for($i = 1; $i <= $quantidade; $i++){
            $resultado += $request->input('n'.$i);
        }
        return view('resultado', $data = ['resultado' => $resultado]);
    }
}