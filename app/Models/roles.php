<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class roles extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $fillable = [
        'rol',
    ];
    protected $hiden = [
        'id_rol',
    ];
}