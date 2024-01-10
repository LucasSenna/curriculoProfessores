<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
        'vinculo',
        'miniCurriculo',
        'orgao',
        'formacao',
        'curriculo',
        'docencia',
        'contraCheque',
        'tema',
        'miniAula',
    ];

}
