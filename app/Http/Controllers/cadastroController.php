<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastros;
use App\Enderecos;

class cadastroController extends Controller
{
    public function cadastro()
    {
        return view('cadastrar');
    }


    public function visualizar($item)
    {
        $item_selecionado = Cadastros::find($item);
        $item_selecionado->data_nascimento = $this->desformatarDada($item_selecionado->data_nascimento);
        return view('visualizar', compact('item_selecionado'));
    }


    public function editar($item)
    {
        $item_selecionado = Cadastros::find($item);
        $item_selecionado->data_nascimento = $this->desformatarDada($item_selecionado->data_nascimento);
        return view('editar', compact('item_selecionado'));
        
    }


    public function atualizar(Request $request)
    {
        $item_selecionado = Cadastros::find($request->id);
        $item_selecionado->primeiro_nome = $request->nome;
        $item_selecionado->segundo_nome = $request->sobrenome;
        $item_selecionado->data_nascimento = $this->formatarDada($request->dataNascimento);
        $item_selecionado->save();

        $tem_endereco = ($item_selecionado_end = Enderecos::find($request->id_end));
        if($tem_endereco){
            
            $this->editar_endereco($request);
        }
        else{
            $this->salva_new_endereco($request);
        }
                   
        return redirect('/');

    }


    public function editar_endereco($request){
        $item_selecionado_end = Enderecos::find($request->id_end);
        $item_selecionado_end->id_cadastro =  $request->id;
        $item_selecionado_end->cep =  $request->cep;
        $item_selecionado_end->logradouro =  $request->logradouro;
        $item_selecionado_end->numero =  $request->numero;
        $item_selecionado_end->bairro =  $request->bairro;
        $item_selecionado_end->cidade =  $request->cidade;
        $item_selecionado_end->estado =  $request->estado;
        $item_selecionado_end->save();
    }


    public function salva_new_endereco($request){
        $item_selecionado_end = new Enderecos;
        $item_selecionado_end->id_cadastro =  $request->id;
        $item_selecionado_end->cep =  $request->cep;
        $item_selecionado_end->logradouro =  $request->logradouro;
        $item_selecionado_end->numero =  $request->numero;
        $item_selecionado_end->bairro =  $request->bairro;
        $item_selecionado_end->cidade =  $request->cidade;
        $item_selecionado_end->estado =  $request->estado;
        $item_selecionado_end->save();
    }

    // public function atualizar_endereco(Request $request)
    // {
    //     $item_selecionado_end = Enderecos::find($request->id_end);
    //     $item_selecionado_end->cep =  $request->cep;
    //     $item_selecionado_end->logradouro =  $request->logradouro;
    //     $item_selecionado_end->numero =  $request->numero;
    //     $item_selecionado_end->bairro =  $request->bairro;
    //     $item_selecionado_end->cidade =  $request->cidade;
    //     $item_selecionado_end->estado =  $request->estado;
    //     $item_selecionado_end->save();
    //     return redirect('/');

    // }

    public function salvar(Request $request)
    {
        $dados = new Cadastros;
        $dados->primeiro_nome = $request->nome;
        $dados->segundo_nome = $request->sobrenome;
        $dados->data_nascimento = $this->formatarDada($request->dataNascimento);
        $dados->save();
        return redirect('/');
    }


    public function excluir($item)
    {
        $listagem = new Cadastros;
        $item_selecionado = $listagem::find($item);
        $item_selecionado_end = $item_selecionado->enderecos;
        if($item_selecionado_end != null){
            $item_selecionado_end->delete();
            $item_selecionado->delete();
        }else{
            $item_selecionado->delete();
        }
        return redirect('/');
    }


    public function formatarDada($valor)
    {
        $dtNscArray = explode('/',$valor);
        $dtNscArrayCorrigido = $dtNscArray[2] .'-'. $dtNscArray[1] .'-'. $dtNscArray[0];
        return $dtNscArrayCorrigido;
    }


    public function desformatarDada($valor)
    {
        $dtNscArray = explode('-',$valor);
        $dtNscArrayCorrigido = $dtNscArray[2] .'/'. $dtNscArray[1] .'/'. $dtNscArray[0];
        return $dtNscArrayCorrigido;
    }

}
