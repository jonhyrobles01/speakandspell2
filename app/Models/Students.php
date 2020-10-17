<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;

    protected $table = "student";

    protected $fillable = [         
        'nombre',
        'email', 
        'ap',
        'am',
        'nacimiento',
        'direccion',
        'ciudad',
        'ocupacion',
        'estudios',
        'nivel',
        'casa',
        'oficina',
        'celular',
        'activo',
        'ruta_foto',
    ];
}
