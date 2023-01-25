<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    protected $table = 'partidas';
    protected $primaryKey = 'codPartida';
    protected $fillable = ['dificultad','puntos','nivel'];
    protected $foreignkey='codUsuario';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
