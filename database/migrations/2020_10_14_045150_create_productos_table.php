<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('referencia', 20);
            $table->string('nombre', 100);
            $table->string('descripcioncorta' , 250);
            $table->text('detalle');
            $table->decimal('valor' , 10 , 2);
            $table->string('palabrasclave', 100);
            $table->string('estado', 1);
            $table->string('foto');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_marca')->unsigned();
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
