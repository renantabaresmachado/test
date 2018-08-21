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
        $end1= \bemacash\Endereco::create([
                    'logradouro' => 'RUA DOS ANDRADAS',
                    'bairro' => null,
                    'cidade'=>null,
                    'estado' => 'Rio Grande do Sul',
                    'pais' => "Brazil",
                    'cep' => '90020005',
                    'numero' => null,
                    'complemento' => null
        ]);
        $det = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.177.48.210')->first();
        $det1 = \bemacash\DetalhePedido::where('contratoDeLicenca', '177.771.49.220')->first();
        $end->detalhepedidos_id = $end->id;
        $end->save();
        $end1->detalhepedidos_id = $end1->id;
        $end1->save();
        $this->assertDatabaseHas('enderecos', [
            'id' => 1
        ]);
        $this->assertDatabaseHas('enderecos', [
            'id' => 2
        ]);
    }

}
