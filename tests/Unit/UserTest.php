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
        $user1=\bemacash\User::create([
            'name' => "Raimundo de Almeida (Charles)",
            'email' => "charles@email.com",
            'area' => "CLIENTE",
            'password' => bcrypt("654321")
        ]);
        $hist= \bemacash\Historico::where('descricao', 'Revendedor Alterou o status do pedido para EM EMISSÃO DA BEMATECH')->first();
        $hist->user_id=$user->id;
        $hist->save();
        $this->assertDatabaseHas('users', [
            'email' => 'humberto@email.com'
        ]);
        $this->assertDatabaseHas('users', [
            'email' => 'charles@email.com'
        ]);
        $ped= \bemacash\Pedido::where('nome' , 'BEMACASH COMÉRCIO IMPRESSORA E SAT')->first();
        $ped->user_id=$user1->id;
        $ped->save();
    }

}
