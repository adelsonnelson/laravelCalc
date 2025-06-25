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



    public function subtrair(Request $request){
        $quantidade = $request->input('quantidade');
        return view('formSubtrair', ['quantidade' => $quantidade]);
    }
    public function calcularSubtracao(Request $request){
        $quantidade = $request->input('quantidade');
        $resultado = $request->input('n1');
        for($i = 2; $i <= $quantidade; $i++){
            $resultado -= $request->input('n'.$i);
        }
        return view('resultado', ['resultado' => $resultado]);
    }



    public function multiplicar(Request $request){
        $quantidade = $request->input('quantidade');
        return view('formMultiplicar', ['quantidade' => $quantidade]);
    }
    public function calcularMultiplicacao(Request $request){
        $quantidade = $request->input('quantidade');
        $resultado = 1;
        for($i = 1; $i <= $quantidade; $i++){
            $resultado *= $request->input('n'.$i);
        }
        return view('resultado', ['resultado' => $resultado]);
    }



    public function dividir(Request $request){
        $quantidade = $request->input('quantidade');
        return view('formDividir', ['quantidade' => $quantidade]);
    }
    public function calcularDivisao(Request $request){
        $quantidade = $request->input('quantidade');
        $resultado = $request->input('n1');
        for($i = 2; $i <= $quantidade; $i++){
            $divisor = $request->input('n'.$i);
            if ($divisor == 0) {
                return back()->withErrors(['error' => 'Não se pode dividir nenhum número por 0 !!!']);
            }
            $resultado /= $divisor;
        }
        return view('resultado', ['resultado' => $resultado]);
    }
}