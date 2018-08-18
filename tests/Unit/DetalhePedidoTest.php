<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetalhePedidoTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateDetalhePedido() {
        \bemacash\DetalhePedido::create([
                    'contratoDeLicenca' => "177.177.48.210",
                    'status' => 'EM REVISÃO DA BEMATECH',
                    'telefoneDeEnvio'=>'7 199 1850 102',
                    'preco' => 251.00, 
                    'cnpjDeEnvio' => '28433934000217',
                    'comentario' => null,
                    'executivoDeVendas' => null,
                    'numeroDoPedidoDeHardware' => null,
                    'numeroNotaFiscal' => null,
                    'dataDaEmissaoDaNotaFiscal' => null,
        ]);
         $this->assertDatabaseHas('detalhe_pedidos', [
            'contratoDeLicenca' => '177.177.48.210'
        ]);
    }

}
