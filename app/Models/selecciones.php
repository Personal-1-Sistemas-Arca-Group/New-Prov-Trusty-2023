<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class selecciones extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable = [
        'cargo',
        'fecha_apli',
    ];
    protected $hiden= [
        'id_seleccion',
        'id_candidato',
        'id_empresa',
    ];
}
