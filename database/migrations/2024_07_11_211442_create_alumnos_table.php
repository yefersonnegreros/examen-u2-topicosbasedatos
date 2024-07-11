<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('curso', 255);
            $table->decimal('nota_1', 5, 2);
            $table->decimal('nota_2', 5, 2);
            $table->decimal('promedio', 5, 2);
            $table->string('condicion',20);
            $table->timestamp('fecha_reg'); 
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
        Schema::dropIfExists('alumnos');
    }
}
