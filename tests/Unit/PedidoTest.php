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
        $ped1 = \bemacash\Pedido::create([
                    'nome' => 'BEMACASH VESTUÁRIO IMPRESSORA + GAVETA',
                    'numeroPedido' => '156',
                    'estado' => 'FATURADO'
        ]);
        $kit = \bemacash\Kit::where('nome', 'BEMACASH BAR E RESTAURANTE NFC-e + IMPRESSORA')->first();
        $kit1 = \bemacash\Kit::where('nome', 'BEMACASH VESTUARIO NFC-e + IMPRESSORA + GAVETA')->first();
        $ped->kits()->attach($kit);
        $ped1->kits()->attach($kit1);

        $det = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.177.48.210')->first();
        $det1 = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.771.49.220')->first();
        $det->pedido_id = $ped->id;
        $det1->pedido_id = $ped1->id;
        $det->save();
        $det1->save();

        $this->assertDatabaseHas('pedidos', [
            'nome' => 'BEMACASH COMÉRCIO IMPRESSORA E SAT'
        ]);
        $this->assertDatabaseHas('pedidos', [
            'nome' => 'BEMACASH VESTUÁRIO IMPRESSORA + GAVETA'
        ]);

    }

}
