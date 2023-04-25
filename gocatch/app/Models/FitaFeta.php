<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitaFeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_jugador',
        'id_fita',
        //timestamp?????        
    ];
}
