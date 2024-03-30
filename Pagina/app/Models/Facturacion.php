<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'rfc_Rec',
        'regimenFiscal_Rec',
        'CP_Rec',
        'razonSocial_Rec',
        'usoCFDI_Rec',
        'email_Rec'
    ];
}

