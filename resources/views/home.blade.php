@extends('layout.template')

@section('content')
<h1>Home</h1>
<hr>
<h2>Usuarios</h2>
<a href="{{route('cadastro.cadastro')}}" class="btn btn-success btn-sm pull-right">Cadastrar novo Usuario</a>
<br>
<br>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Opções</th>
    </tr>
    @if(count($lista_retorno)<1)
       <tr>
           <td colspan="4"><h3 style="text-align:center; font-size:30px;">Não há dados</h3></td>
       </tr>
    @else
        @foreach ($lista_retorno as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->primeiro_nome }}</td>
            <td>{{ $item->data_nascimento }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{route('cadastro.visualizar', ['id' => $item->id])}}">Visualizar</a>
                <a style="margin:0 10px;" class="btn btn-warning btn-sm" href="{{route('cadastro.editar', ['id' => $item->id])}}">Editar</a>
                <a class="btn btn-danger btn-sm" href="{{route('cadastro.excluir', ['id' => $item->id])}}">Excluir</a>
            </td>
        </tr>
        @endforeach
    @endif
</table>
{{ $lista_retorno->links()}}
<hr>
@endsection