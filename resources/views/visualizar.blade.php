@extends('layout.template')

@section('content')
<h1>Visualizar</h1>
<hr>
<h2>Dados</h2>
<table class="table">
    <tr>
        <th width="200">ID</th>
        <td>{{  $item_selecionado->id }}</td>
    </tr>
    <tr>
        <th width="100">Nome</th>
        <td>{{  $item_selecionado->primeiro_nome }}</td>
    </tr>
    <tr>
        <th width="100">Data de nascimento</th>
        <td>{{  $item_selecionado->data_nascimento }}</td>
    </tr>
</table>
<h2>Endereco</h2>
<table class="table">
        <tr>
            <th width="200">Rua</th>
            <td>
                {{ empty($item_selecionado->enderecos->logradouro)  ? '-' : $item_selecionado->enderecos->logradouro}}
            </td>
        </tr>
        <tr>
            <th width="100">Numero</th>
            <td>
                {{ empty($item_selecionado->enderecos->numero)  ? '-' : $item_selecionado->enderecos->numero}}
            </td>
        </tr>
        <tr>
            <th width="100">CEP</th>
            <td>
                {{ empty($item_selecionado->enderecos->cep)  ? '-' : $item_selecionado->enderecos->cep}}
            </td>
        </tr>
        <tr>
            <th width="100">Bairro</th>
            <td>
                {{ empty($item_selecionado->enderecos->bairro)  ? '-' : $item_selecionado->enderecos->bairro}}
            </td>
        </tr>
        <tr>
            <th width="100">Cidade</th>
            <td>
                {{ empty($item_selecionado->enderecos->cidade)  ? '-' : $item_selecionado->enderecos->cidade}}
            </td>
        </tr>
        <tr>
            <th width="100">Estado</th>
            <td>
                {{ empty($item_selecionado->enderecos->estado)  ? '-' : $item_selecionado->enderecos->estado}}
            </td>
        </tr>
    </table>
<hr>
<a href="/" class="btn btn-sm btn-primary">Voltar para listagem</a>
<a style="margin:0 10px;" class="btn btn-warning btn-sm pull-right" href="{{route('cadastro.editar', ['id' => $item_selecionado->id])}}">Editar</a>
<a style="margin:0 10px;" class="btn btn-danger btn-sm pull-right" href="{{route('cadastro.excluir', ['id' => $item_selecionado->id])}}">Excluir</a>
@endsection