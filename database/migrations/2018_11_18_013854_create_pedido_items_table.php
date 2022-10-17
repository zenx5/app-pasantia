<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_items', function (Blueprint $table) {
            $table->increments('idpedido_item');
            $table->unsignedInteger('id_servicio')->nullable();
            $table->foreign('id_servicio')->references('idservicio')->on('servicios')->onDelete('cascade');
            $table->unsignedInteger('id_pedido')->nullable();
            $table->foreign('id_pedido')->references('idpedido')->on('pedidos')->onDelete('cascade');;
            $table->float('precio');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_items');
    }
}
