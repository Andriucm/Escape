<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    protected $primaryKey = "codUsuario";
    protected $fillable = ['usuario', 'contrasena', 'nombre', 'apellido', 'email', 'telefono', 'rol'];
    protected $hidden = "codUsuario";

    public function obtenerAlumnos()
    {
        return User::all();
    }

    public function obtenerAlumnoPorId($id)
    {
        return User::find($id);
    }
}