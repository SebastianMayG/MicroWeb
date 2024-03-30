<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiEmpresa extends Model
{
    use HasFactory;
    protected $table = 'datos_empresa';
    protected $fillable = [
        'rfc',
        'regimen_fiscal',
        'direccion_codigo_postal',
        'nombre_razon_social',
        'email',
        'logo',
        'contestado',
    ];
}
