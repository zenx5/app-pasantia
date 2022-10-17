<?php

use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pedidos')->insert([

                [
                    'idpedido' => 1,
                    'idusers' => 1,
                    'total_pedido' => 10.00,
                    'status' => 'Pago',
                    'created_at' => '2018-11-30 16:39:30',
                    'updated_at' => '2018-11-30 16:39:30',
                ],

                [
                    'idpedido' => 2,
                    'idusers' => 1,
                    'total_pedido' => 10.00,
                    'status' => 'Pago',
                    'created_at' => '2018-12-01 04:49:26',
                    'updated_at' => '2018-12-01 04:49:26',
                ],

                [
                    'idpedido' => 3,
                    'idusers' => 2,
                    'total_pedido' => 10.00,
                    'status' => 'Pago',
                    'created_at' => '2018-12-03 06:22:47',
                    'updated_at' => '2018-12-03 06:22:47',
                ],

                [
                    'idpedido' => 4,
                    'idusers' => 3,
                    'total_pedido' => 13.00,
                    'status' => 'Pago',
                    'created_at' => '2018-12-23 03:10:21',
                    'updated_at' => '2018-12-23 03:10:21',
                ],
               

            ]);
    }
}
