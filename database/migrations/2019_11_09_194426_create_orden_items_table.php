<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idinsumo')->unsigned();
            $table->string('nombre');
            $table->decimal('precio_unitario', 6,2);
            $table->integer('cantidad');
            $table->decimal('subtotal', 10,2);            
            $table->integer('idactividad')->unsigned();
            $table->integer('idusuario')->unsigned();
        });

        Schema::table('orden_items', function (Blueprint $table) {
            $table->foreign('idinsumo')->references('id')->on('insumos')->onDelete('cascade');
            $table->foreign('idactividad')->references('id')->on('actividades')->onDelete('cascade');
            $table->foreign('idusuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_items');
    }
}
