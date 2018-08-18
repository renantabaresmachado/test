<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use bemacash;

class ComponenteTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatComponente() {
        
        \bemacash\Componente::create([
            'nome' => 'Balança Computadora Digital',
            'modelo' => 'Balança Computadora Digital ',
            'referencia' => '188 100090',
            'imagem' => 'balanca.png'
        ]);
         
        $this->assertDatabaseHas('componentes', [
            'nome' => 'Balança Computadora Digital'
        ]);
        
       
    }

}
