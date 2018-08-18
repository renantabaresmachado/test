<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LicencaTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateLicenca() {
        \bemacash\Licenca::create([
            'nome' => 'licença de software Bemacash test'
        ]);


        $this->assertDatabaseHas('licencas', [
            'nome' => 'licença de software Bemacash test'
        ]);
    }

}
