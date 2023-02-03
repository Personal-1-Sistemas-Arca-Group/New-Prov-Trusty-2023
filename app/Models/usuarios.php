<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable=[
        'usuario',
    ];
    protected $hiden=[
        'id_usuario',
        'password',
        'id_rol',
        'id_estado',
    ];
}
