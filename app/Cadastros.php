<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
    protected $table = 'cadastros';
    protected $fillable = [
        'nome',
        'sobrenome',
        'dataNascimento'
    ];

    public function enderecos()
    {
        return $this->hasOne('App\Enderecos', 'id_cadastro');
    }

}
