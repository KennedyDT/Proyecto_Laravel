<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            // Información de servicios
            $table->id();

            //Información del Usuario
            $table->unsignedBigInteger('users_id');
            $table->string('users_name');
            $table->string('users_plate');

            $table->string('type_service');
               
            //Información del Operario
            $table->unsignedBigInteger('operators_id');
            $table->string('operators_name');
          
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('operators_id')->references('id')->on('operators');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
