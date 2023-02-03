<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresas extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable = [
        'nombre_emp',
        'calle_emp',
        'municipio_emp',
        'ciudad_emp',
        'cp_emp',
        'telefono_emp',
        'foto_emp',
    ];
    protected $hiden = [
        'id_empresa',
        'id_usuario',
    ];
}
