<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model
{
    use HasFactory;
    protected $table = "puntuanions";
            protected $primaryKey=('codPuntuacion');
           protected $foreignkey=['codUsuario','codGrupo','codPartida'];
            protected $fillable=('puntos');
}
