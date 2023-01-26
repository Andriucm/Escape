<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = "grupos";
    protected $primaryKey = "codGrupo";

    protected $hidden = 'codGrupo';
    public function users()
    {
        return $this->hasMany(User::class,'codUsuario');
    }
    
}
