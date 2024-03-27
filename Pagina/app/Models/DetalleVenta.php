<?php

namespace App\Models;

use App\Articulo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalle_venta';

    protected $primaryKey='iddetalle_venta';
    public $timestamps=false;

    protected $fillable =[
     'idventa',
     'idarticulo',
     'cantidad',
     'precio_venta',
     'descuento'
    ];
    protected $guarded =[];

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'idventa');
    }

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'idarticulo');
    }
}
