<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class candidato extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable=[
        'nombre_c',
        'app_c',
        'apm_c',
        'telefonos_c',
        'foto_c',
    ];
    protected $hiden=[
        'id_candidato',
        'id_usuario'        
    ];
}
