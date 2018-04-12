@extends('layout.template')

@section('content')
    <h1>Editar Usuario</h1>
    <hr>
    <h2>Dados</h2>
    <br>
    <form action="/cadastro/atualizar" class="clearfix" method="POST">
        <input type="hidden" name="id" value="{{ $item_selecionado->id }}">
        <input type="hidden" name="id_end" value="{{ empty($item_selecionado->enderecos->id)  ? '' : $item_selecionado->enderecos->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group col-sm-4">
            <label for="inputNome">Nome*</label>
        <input  id="inputNome" type="text" name="nome" class="form-control"  placeholder="Primeiro nome" value="{{ $item_selecionado->primeiro_nome }}" required>
        </div>
        <div class="form-group col-sm-4">
            <label for="inputSobrenome">Sobrenome*</label>
            <input  id="inputSobrenome" type="text" name="sobrenome" class="form-control"  placeholder="Sobrenome" value="{{ $item_selecionado->segundo_nome }}" required>
        </div>
        <div class="form-group col-sm-4">
            <label for="inputNasc">Data de nascimento*</label>
            <input  id="inputNasc" type="text" name="dataNascimento" class="form-control"  placeholder="00/00/0000" maxlength="10" value="{{ $item_selecionado->data_nascimento }}" required>
        </div>
       
         <hr class="col-sm-12">
        <h2>Endereco</h2>
        <div class="form-group col-sm-4">
            <label for="inputCEP">CEP</label>
            <input  id="inputCEP" type="text" name="cep" class="form-control"  placeholder="CEP" value="{{ empty($item_selecionado->enderecos->cep)  ? '' : $item_selecionado->enderecos->cep}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="inputEndereco">Endereco</label>
            <input  id="inputEndereco" type="text" name="logradouro" class="form-control"  placeholder="Endereco" value="{{ empty($item_selecionado->enderecos->logradouro)  ? '' : $item_selecionado->enderecos->logradouro}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="inputNumero">Número</label>
            <input  id="inputNumero" type="text" name="numero" class="form-control"  placeholder="Número" value="{{ empty($item_selecionado->enderecos->numero)  ? '' : $item_selecionado->enderecos->numero}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="inputBairro">Bairro</label>
            <input  id="inputBairro" type="text" name="bairro" class="form-control"  placeholder="Bairro" value="{{ empty($item_selecionado->enderecos->bairro)  ? '' : $item_selecionado->enderecos->bairro}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="inputCidade">Cidade</label>
            <input  id="inputCidade" type="text" name="cidade" class="form-control"  placeholder="Cidade" value="{{ empty($item_selecionado->enderecos->cidade)  ? '' : $item_selecionado->enderecos->cidade}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="inputEstado">Estado</label>
            <input  id="inputEstado" type="text" name="estado" class="form-control"  placeholder="Estado" value="{{ empty($item_selecionado->enderecos->estado)  ? '' : $item_selecionado->enderecos->estado}}">
        </div>
        <div class="form-group col-sm-12">
                <a style="margin:0 10px;" href="/" class="btn btn-sm btn-danger pull-right">Cancelar</a>
                <input style="margin:0 10px;"  id="inputEnviar" type="submit" name="enviar" class="btn btn-success pull-right btn-sm" value="Salvar formulario">
            </div>
    </form>

@endsection