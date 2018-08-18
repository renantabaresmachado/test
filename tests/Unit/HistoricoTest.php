<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HistoricoTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateHistorico() {
        $hist1 = \bemacash\Historico::create([
                    'descricao' => 'Novo Pedido foi Submetido'
        ]);
        $hist2 = \bemacash\Historico::create([
                    'descricao' => 'Revendedor Alterou o status do pedido para EM EMISSÃO DA BEMATECH'
        ]);
        $det = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.177.48.210')->first();
        $hist1->detalhePedido_id = $det->id;
        $hist2->detalhePedido_id = $det->id;
        $hist1->save();
        $hist2->save();
        $this->assertDatabaseHas('historicos', [
            'descricao' => 'Novo Pedido foi Submetido'
        ]);
        $this->assertDatabaseHas('historicos', [
            'descricao' => 'Revendedor Alterou o status do pedido para EM EMISSÃO DA BEMATECH'
        ]);
    }

}
