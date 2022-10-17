<?php

use Illuminate\Database\Seeder;

class PedidositemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
     \DB::table('pedido_items')->insert([   
	    
	    [
	       'idpedido_item' => 1,
	       'id_servicio'  => 1, 
	       'id_pedido'  => 1,
	       'precio'  => 10.00,
	       'cantidad'  => 1,
	       'created_at'  => '2018-12-23 03:10:21',
	       'updated_at'  =>'2018-12-23 03:10:21',
	    ],

	    [
	       'idpedido_item' => 2,
	       'id_servicio'  => 1,
	       'id_pedido'  => 2,
	       'precio'  => 10.00,
	       'cantidad'  => 1,
	       'created_at'  => '2018-12-23 03:10:21',
	       'updated_at'  => '2018-12-23 03:10:21',
	    ],

	    [
	       'idpedido_item' => 3,
	       'id_servicio'  => 1,
	       'id_pedido'  => 3,
	       'precio'  => 10.00,
	       'cantidad'  => 1,
	       'created_at'  => '2018-12-23 03:10:21',
	       'updated_at'  => '2018-12-23 03:10:21',
	    ],

	    [
	       'idpedido_item' => 4,
	       'id_servicio'  => 1,
	       'id_pedido'  => 4,
	       'precio'  => 2.00,
	       'cantidad'  => 1,
	       'created_at'  => '2018-12-23 03:10:21',
	       'updated_at'  => '2018-12-23 03:10:21',
	    ],

	    [
	       'idpedido_item' => 5,
	       'id_servicio'  => 2,
	       'id_pedido'  => 4,
	       'precio'  => 5.00,
	       'cantidad'  => 1,
	       'created_at'  => '2018-12-23 03:10:21',
	       'updated_at'  =>'2018-12-23 03:10:21',
	    ],

	    [
	       'idpedido_item' => 6,
	       'id_servicio'  => 3,
	       'id_pedido'  => 4,
	       'precio'  => 6.00,
	       'cantidad'  => 1,
	       'created_at'  => '2018-12-23 03:10:21',
	       'updated_at'  => '2018-12-23 03:10:21',
	    ],


	   ]);
    }
}
