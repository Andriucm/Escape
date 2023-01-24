<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    protected $table = 'partidas';
    protected $primaryKey = 'codPartida';
    protected $fillable = ['dificultad','nombre'];
    protected $foreignkey='codUsuario';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
