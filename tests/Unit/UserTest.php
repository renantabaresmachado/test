<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
//
use DatabaseTransactions;

class UserTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUser() {
        $user=\bemacash\User::create([
            'name' => "HUMBERTO OLIVEIRA GUIMARAES",
            'email' => "humberto@email.com",
            'area' => "EPP",
            'password' => bcrypt("123456")
        ]);
        $hist= \bemacash\Historico::where('descricao', 'Revendedor Alterou o status do pedido para EM EMISSÃO DA BEMATECH')->first();
        $hist->user_id=$user->id;
        $hist->save();
        $this->assertDatabaseHas('users', [
            'email' => 'humberto@email.com'
        ]);
    }

}
