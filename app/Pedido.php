<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = 'pedidos';
	protected $primaryKey='idpedido';
    protected $fillable = ['total_pedido','status','idusers'];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}

	public function pedido_items()
	{
	    return $this->hasMany('App\PedidoItem');
	}
}
