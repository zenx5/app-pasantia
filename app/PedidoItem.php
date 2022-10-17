<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    protected $table = 'pedido_items';
    protected $fillable = ['precio','cantidad','id_servicio','id_pedido'];
    public $timestamps = false;

    public function pedido()
	{
	    return $this->belongsTo('App\Pedido');
	}

	public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
}
