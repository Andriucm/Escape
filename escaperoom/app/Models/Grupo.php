<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $primaryKey = "codGrupo";
    protected $fillable = 'nombre';
    protected $hidden = 'codGrupo';
}
