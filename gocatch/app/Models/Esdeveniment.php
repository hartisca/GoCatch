<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esdeveniment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_partida',//fk partida
        'id_esdeveniment',
        'id_jugador',//fk jugdaor
                //timestamp?
    ];
}
