<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//comentari per esborrar
class Combat extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_fita',//fk fita
        'id_equip',//fk equip
        'soldadets'        
    ];
}
