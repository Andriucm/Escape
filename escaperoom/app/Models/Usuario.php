<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";
    protected $primaryKey = "codUsuario";
    protected $fillable = ['usuario','contrasena','nombre','apellido','email','telefono','rol'];
    protected $hidden = "codUsuario";
}
