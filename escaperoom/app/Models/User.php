<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    protected $primaryKey = "codUsuario";
    protected $foreignKey = "codGrupo";
    protected $fillable = ['usuario','password', 'nombre', 'apellido', 'email', 'telefono', 'rol','remember_token'];
    protected $hidden = 'codUsuario';

    public function grupo()
{
    return $this->belongsTo(Grupo::class);
}

public function partidas()
{
    return $this->hasMany(Partida::class, 'codPartida');
}

}
