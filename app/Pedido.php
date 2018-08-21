<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

    protected $fillable = [
        'nome', 'numeroPedido', 'estado',
    ];

    public function detalhePedido() {
        
        return $this->hasOne('\bemacash\DetalhePedido', 'pedido_id');
    }

    public function kits() {
        return $this->belongsToMany('\bemacash\Kit', 'item', 'pedido_id', 'kit_id');
    }

    public function user() {
        return $this->hasOne('\bemacash\User', 'foreign_key');
    }

}
