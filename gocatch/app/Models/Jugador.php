<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_usuari',
        'nom',
        'soldadets',
        'img',
        'id_equip' 
    ];
}
