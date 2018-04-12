<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastros;

class homeController extends Controller
{

    public function home()
    {
        $exemplo = [];
        $lista_retorno = Cadastros::paginate(5);
        for ($i = 0; $i < count($lista_retorno); $i++) {
            $exemplo[$i] = $lista_retorno[$i]->data_nascimento;
            $exemplo[$i] = $this->desformatarDada($exemplo[$i]);
        }
        for ($i = 0; $i < count($exemplo); $i++) {
            $lista_retorno[$i]->data_nascimento = $exemplo[$i];
        }
        return view("home", compact('lista_retorno'));
    }


    public function desformatarDada($valor)
    {
        $dtNscArray = explode('-',$valor);
        $dtNscArrayCorrigido = $dtNscArray[2] .'/'. $dtNscArray[1] .'/'. $dtNscArray[0];
        return $dtNscArrayCorrigido;
    }
}
