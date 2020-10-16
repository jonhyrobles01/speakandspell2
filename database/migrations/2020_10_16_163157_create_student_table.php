<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('matricula')->unique();
            $table->string('nombre');
            $table->string('email')->nullable();
            $table->string('ap')->nullable();
            $table->string('am')->nullable();
            $table->integer('edad')->nullable();
            $table->date('nacimiento')->default('9999/12/31');
            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('estudios')->nullable();
            $table->string('nivel')->nullable();
            $table->integer('descuento')->nullable();
            $table->string('casa')->nullable();
            $table->string('oficina')->nullable();
            $table->string('celular')->nullable();
            $table->string('activo')->nullable();    
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
        Schema::dropIfExists('student');
    }
}
