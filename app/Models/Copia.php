<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copia extends Model
{
    use HasFactory;
    protected $fillable = ['libro_id', 'numero_copia', 'estanteria_id'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    public function estanteria()
    {
        return $this->belongsTo(Estanteria::class);
    }
}
