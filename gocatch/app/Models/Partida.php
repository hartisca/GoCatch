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
        'puntsVictoria',
        'duracio',
        'id_mapa', 
    ];
    public function fita(){
        return $this->hasMany(Fita::class);
    }
    public function esdeveniment(){
        return $this->hasMany(Esdeveniment::class);
    }
    public function equip(){
        return $this->hasMany(Equip::class);
    }
    public function mapa(){
        return $this->belongsTo(Mapa::class);
    }
}
