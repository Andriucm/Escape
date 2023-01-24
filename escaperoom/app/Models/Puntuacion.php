<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Puntuacion extends Model
{
    use HasFactory;
    protected $table = "puntuanions";
            protected $primaryKey=('codPuntuacion');
           protected $foreignkey='codPartida';
            protected $fillable=('puntos');
       
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
