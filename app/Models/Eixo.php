<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eixo extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function temas(){
        return $this->hasMany('App\Tema', 'eixo_id'); //Relação 1 para N UM EIXO POSSUI VÁRIOS TEMAS
    }
}
