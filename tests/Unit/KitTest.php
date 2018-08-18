<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KitTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateKit() {
        $comp1 = \bemacash\Componente::create([
                    'nome' => 'TABLET SANSUNG GALAXY TAB 9.6',
                    'modelo' => 'SM-T560',
                    'referencia' => '199 100070',
                    'imagem' => 'tablet.png'
        ]);

        $comp2 = \bemacash\Componente::create([
                    'nome' => 'SUPORTE METÁLICO TABLET',
                    'modelo' => 'BEMACASH 9.6 pol',
                    'referencia' => '499 100720',
                    'imagem' => 'suporte_tablet.png'
        ]);
        $comp3 = \bemacash\Componente::create([
                    'nome' => 'GAVETA DE DINHEIRO',
                    'modelo' => 'GD 56 PRETA',
                    'referencia' => '128000 100',
                    'imagem' => 'gaveta_de_dinheiro.png'
        ]);

        $comp4 = \bemacash\Componente::create([
                    'nome' => 'MP-4200',
                    'modelo' => 'TH ETHERNET BR',
                    'referencia' => '10 1000830',
                    'imagem' => 'impressora.png'
        ]);

        $comp5 = \bemacash\Componente::create([
                    'nome' => 'LEITOR CCD BT',
                    'modelo' => 'SCANNER BR-200BT',
                    'referencia' => '03 100 10',
                    'imagem' => 'scanner.png'
        ]);

        $lic1 = \bemacash\Licenca::create([
                    'nome' => 'licença de software Bemacash'
        ]);

        $lic2 = \bemacash\Licenca::create([
                    'nome' => 'Licenciamento Bemacash Vestuário'
        ]);
        $lic3 = \bemacash\Licenca::create([
                    'nome' => 'Licença de software Fiscal Manager'
        ]);
        //KIT 1 USERSTORY
        $kit = new \bemacash\Kit();
        $kit->nome = "BEMACASH VESTUARIO NFC-e + IMPRESSORA + GAVETA";
        $kit->tipoDeLicenca = "BEMACASH VESTUARIO NFC-e";
        $kit->save();

        $kit->componentes()->attach($comp1);
        $kit->componentes()->attach($comp2);
        $kit->componentes()->attach($comp3);
        $kit->componentes()->attach($comp4);


        $kit->licencas()->attach($lic1);
        $kit->licencas()->attach($lic3);

        $kit->save();

        $this->assertDatabaseHas('kits', [
            'nome' => 'BEMACASH VESTUARIO NFC-e + IMPRESSORA + GAVETA'
        ]);
        //KIT 2 DO USERSTORY
        $kit = new \bemacash\Kit();
        $kit->nome = "BEMACASH COMÉRCIO NFC-e + IMPRESSORA + GAVETA + LEITOR";
        $kit->tipoDeLicenca = "BEMACASH COMÉRCIO NFC-e";
        $kit->save();

        $kit->componentes()->attach($comp1);
        $kit->componentes()->attach($comp2);
        $kit->componentes()->attach($comp3);
        $kit->componentes()->attach($comp4);
        $kit->componentes()->attach($comp5);

        $kit->licencas()->attach($lic1);

        $kit->save();

        $this->assertDatabaseHas('kits', [
            'nome' => 'BEMACASH COMÉRCIO NFC-e + IMPRESSORA + GAVETA + LEITOR'
        ]);
        //KIT 3 DO USERSTORY
        $kit = new \bemacash\Kit();
        $kit->nome = "BEMACASH BAR E RESTAURANTE NFC-e + IMPRESSORA";
        $kit->tipoDeLicenca = "BAR E RESTAURANTE NFC-e";
        $kit->save();

        $kit->componentes()->attach($comp1);
        $kit->componentes()->attach($comp2);
        $kit->componentes()->attach($comp4);

        $kit->licencas()->attach($lic1);

        $kit->save();

        $this->assertDatabaseHas('kits', [
            'nome' => 'BEMACASH BAR E RESTAURANTE NFC-e + IMPRESSORA'
        ]);
    }

}
