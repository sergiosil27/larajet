<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbquimicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbquimica', function (Blueprint $table) {
            $table->id();
            $table->string('prueba',50);
            $table->string('metodo',50);
            $table->string('dia_montaje',50);
            $table->string('tipo_muestra',50);
            $table->string('condiciones',50);
            $table->string('tiempo_entrega',50);
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
        Schema::dropIfExists('dbquimica');
    }
}
