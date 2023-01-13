<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "usuarios";
    protected $primaryKey = "codUsuario";
    protected $fillable = ['usuario','contrasena','nombre','apellido','email','telefono','rol'];
    protected $hidden = "codUsuario";

    public function obtenerAlumnos()
 {
   return Alumno::all();
  }

  public function obtenerAlumnoPorId($id)
  {
     return Alumno::find($id);
   }
}

