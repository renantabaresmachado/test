<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnderecoTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateEndereco() {
        $end= \bemacash\Endereco::create([
                    'logradouro' => 'RUA WALDEMAR FALCÃO',
                    'bairro' => null,
                    'cidade'=>null,
                    'estado' => 'Bahia',
                    'pais' => "Brazil",
                    'cep' => '40285885',
                    'numero' => null,
                    'complemento' => null
        ]);
        $det = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.177.48.210')->first();
        $end->detalhepedidos_id = $end->id;
        $end->save();
        $this->assertDatabaseHas('enderecos', [
            'id' => 1
        ]);
    }

}
