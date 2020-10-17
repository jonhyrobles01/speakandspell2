<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Levels extends Model
{
    use HasFactory;

    protected $table = "levels";

    protected $fillable = [
        'nombre',
        'horario',
        'finicio',
        'ffin',
        'costo',
        'activo',
    ];
}
