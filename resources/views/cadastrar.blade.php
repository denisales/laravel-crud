@extends('layout.template')

@section('content')
    <h1>Cadastrar Usuario</h1>
    <hr>
    <h2>Dados</h2>
    <br>
    <form action="cadastro/salvar" class="clearfix" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group col-sm-4">
            <label for="inputNome">Nome*</label>
            <input  id="inputNome" type="text" name="nome" class="form-control"  placeholder="Primeiro nome" required>
        </div>
        <div class="form-group col-sm-4">
            <label for="inputSobrenome">Sobrenome*</label>
            <input  id="inputSobrenome" type="text" name="sobrenome" class="form-control"  placeholder="Sobrenome" required>
        </div>
        <div class="form-group col-sm-4">
            <label for="inputNasc">Data de nascimento*</label>
            <input  id="inputNasc" type="text" name="dataNascimento" class="form-control"  placeholder="00/00/0000" maxlength="10" required>
        </div>
        <div class="form-group col-sm-12">
            <a style="margin:0 10px;" class="btn btn-danger btn-sm pull-right" href="/">Cancelar</a>
            <input style="margin:0 10px;" id="inputEnviar" type="submit" name="enviar" class="btn btn-success pull-right btn-sm" value="Salvar formulario">
            
        </div>
    </form>

@endsection