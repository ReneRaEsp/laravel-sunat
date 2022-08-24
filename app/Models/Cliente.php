<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'documento',
        'nombre',
        'alias',
        'direccion',
        'ubigeo',
        'email',
        'movil',
        'fijo'
    ];
}
