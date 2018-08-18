<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PedidoTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatePedido() {
        $ped = \bemacash\Pedido::create([
                    'nome' => 'BEMACASH COMÉRCIO IMPRESSORA E SAT',
                    'numeroPedido' => '154',
                    'estado' => 'FATURADO'
        ]);
        $kit = \bemacash\Kit::where('nome', 'BEMACASH BAR E RESTAURANTE NFC-e + IMPRESSORA')->first();
        $ped->kits()->attach($kit);

        $det = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.177.48.210')->first();
        $det->pedido_id = $ped->id;
        $det->save();

        $this->assertDatabaseHas('pedidos', [
            'nome' => 'BEMACASH COMÉRCIO IMPRESSORA E SAT'
        ]);

    }

}
