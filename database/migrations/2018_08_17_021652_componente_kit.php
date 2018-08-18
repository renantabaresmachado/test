<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComponenteKit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componente_kit', function (Blueprint $table) {
            $table->integer('componente_id')->unsigned()->nullable();
            $table->foreign('componente_id')->references('id')->on('componentes');
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
