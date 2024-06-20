<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'fecha_publicacion', 'autor_id', 'tema_id'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
}
