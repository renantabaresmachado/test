<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
     protected $fillable = [
        'logradouro', 'bairro', 'cidade', 'estado', 'pais',
        'cep', 'numero', 'complemento',
    ];
    public function pedido() {
        return $this->hasOne('\bemacash\DetalhePedido', 'foreign_key');
    }

}
