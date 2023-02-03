<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empleados extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable = [
        'nombre_em',
        'app_em',
        'apm_em',
        'calle_em',
        'municipio_em',
        'cp_em',
        'ciudad_em',
        'telefonos_em',
        'departamento_em',
        'foto_em',
    ];
    protected $hiden = [
        'id_empleado',
        'id_empresa',
        'id_usuario',
    ];
}
