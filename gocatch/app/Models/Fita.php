<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fita extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'lat',
        'long',
        'id_partida',
        'id_tipus' 
        //timestamp       
    ];
}
