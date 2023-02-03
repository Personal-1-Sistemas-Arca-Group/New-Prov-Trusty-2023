<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estados extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable = [
        'estado',
    ];
    protected $hiden = [
        'id_estado',
    ];
}
