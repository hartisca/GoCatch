<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitaFeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_jugador',//fk jugador
        'id_fita', //fk fita
             
    ];
    public function jugador(){
        return $this->belongsTo(Jugador::class);
    }
    public function fita(){
        return $this->belongsTo(Fita::class);
    }
}
