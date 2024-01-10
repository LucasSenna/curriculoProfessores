<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tema extends Model
{
    protected $fillable = [
        'nome',
        'eixo_id'
    ];

    public function eixo(){
        return $this->belongsTo('App\Eixo', 'eixo_id'); //Relação 1 para N UM TEMA PERTENCE A UM EIXO
    }
}
