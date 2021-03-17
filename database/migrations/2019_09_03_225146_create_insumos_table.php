<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre', 800);            
            $table->string('unidad');
            $table->decimal('precio_unitario', 6, 2);
            $table->integer('idcategoria')->unsigned();
            $table->integer('idproyecto')->unsigned();
            $table->integer('idproveedor')->unsigned();
            $table->integer('idinsumo');
        });

        Schema::table('insumos', function (Blueprint $table) {
            $table->foreign('idcategoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('idproyecto')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('idproveedor')->references('id')->on('proveedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumos');
    }
}
