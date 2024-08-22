<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio1Controller extends Controller
{
    public function calcularJuros(Request $request)
    {
         $valor_incial = $request->input('valor_inicial');
         $taxa_juros = $request->input('taxa_juros');
         $anos = $request->input('anos');
         $resultado = $valor_incial * pow((1 + $taxa_juros/100), $anos);
         return "Valor final: $resultado";
    }
}
