<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logradouro');
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado');
            $table->string('pais');
            $table->string('cep');
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->integer('detalhepedidos_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('detalhepedidos_id')->references('id')->on('detalhe_pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('enderecos');
    }

}
