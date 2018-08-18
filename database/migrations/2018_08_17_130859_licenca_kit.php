<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LicencaKit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit_licenca', function (Blueprint $table) {
            $table->integer('licenca_id')->unsigned()->nullable();
            $table->foreign('licenca_id')->references('id')->on('licencas');
            $table->integer('kit_id')->unsigned()->nullable();
            $table->foreign('kit_id')->references('id')->on('kits');
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
        //
    }
}
