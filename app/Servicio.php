<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'idservicio';
    protected $fillable = 
    [
        'nombre','cantidad','slug','descripcion','precio'
    ];

    public function pedido_item()
    {
        return $this->hasOne('App\PedidoItem');
    }

    
}
