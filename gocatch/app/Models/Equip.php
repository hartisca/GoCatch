<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_partida',// fk partida
        'nom',
        'punts'        
    ];
    public function partida()
    {
    return $this->belongsTo(Partida::class);
    }

}
