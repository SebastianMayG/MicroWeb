<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table='articulo';

    protected $primaryKey='idarticulo';

    public $timestamps=false;


    protected $fillable =[
    	'idcategoria',
    	'codigo',
    	'nombre',
        'stock',
        'descripcion',
        'imagen',
        'estado',
        'user_id'
    ];

    protected $guarded =[

    ];

    public function user()
    {
        return $this -> belongsTo(User::class);   
    }

}