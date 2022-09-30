<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->interger('documento',10);
            $table->string('tipoDocumento',300);
            $table->date('nacimiento');
            $table->string('genero',15);
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('UbicacionId',100); 
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
        Schema::dropIfExists('registers');
    }
}
