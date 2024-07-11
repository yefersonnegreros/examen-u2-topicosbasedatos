<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    use HasFactory;
    protected $fillable = [
        'nombre',
        'curso',
        'nota_1',
        'nota_2',
        'promedio',
        'condicion',
        'fecha_reg',
    ];

}

