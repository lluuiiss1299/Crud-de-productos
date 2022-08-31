<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('descripcion',100);
            $table->string('categoria')->references('catTd')->on('catalogo_categorias');
            $table->string('sucursal')->references('sucId')->on('catalogo_sucursales');
            $table->decimal('precio');
            $table->date('fecha_compra');
            $table->boolean('estado')->default(true);
            $table->string('comentario',100)->default('');

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
        Schema::dropIfExists('productos');
    }
};
