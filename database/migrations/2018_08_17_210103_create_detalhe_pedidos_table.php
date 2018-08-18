<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalhePedidosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('detalhe_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned()->nullable();
            $table->string('contratoDeLicenca');
            $table->string('status');
            $table->string('telefoneDeEnvio');
            $table->double('preco');
            $table->string('cnpjDeEnvio');
            $table->string('comentario')->nullable();
            $table->string('executivoDeVendas')->nullable();
            $table->string('numeroDoPedidoDeHardware')->nullable();
            $table->string('numeroNotaFiscal')->nullable();
            $table->date('dataDaEmissaoDaNotaFiscal')->nullable();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('detalhe_pedidos');
    }

}
