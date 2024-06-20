<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estanteria extends Model
{
    use HasFactory;

    protected $fillable = ['tema_id', 'biblioteca_id', 'codigo'];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function biblioteca()
    {
        return $this->belongsTo(Biblioteca::class);
    }
}
