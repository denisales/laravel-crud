<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $table = 'enderecos';
    protected $fillable = [
        'logradouro',
        'numero',
        'cep',
        'bairro',
        'cidade',
        'estado'
    ];
}
