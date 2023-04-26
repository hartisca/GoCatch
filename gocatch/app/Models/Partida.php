<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id',
        'nom',
        'duracio',
        'puntsVictoria',
        'id_mapa', //fk mapa
        //timestamp?
    ];
}
