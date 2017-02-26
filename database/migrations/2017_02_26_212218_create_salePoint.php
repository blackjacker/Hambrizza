<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalePoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('salePoint', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razonSocial');
            $table->string('nomComercial');
            $table->string('estado');
            $table->string('cp');
            $table->string('municipio');
            $table->string('colonia');
            $table->string('numeInt');
            $table->string('numExt');
            $table->string('calle');
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
        Schema::dropIfExists('salePoint');
    }
}

