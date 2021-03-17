<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idproyecto');
            $table->decimal('largo', 6,2);
            $table->decimal('alto', 6,2);
            $table->decimal('ancho', 6,2);
            $table->string('descripcion');
            $table->integer('idusuario')->unsigned();
            $table->string('tiempo');
        });

        Schema::table('actividades', function (Blueprint $table) {
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
        Schema::dropIfExists('actividades');
    }
}
