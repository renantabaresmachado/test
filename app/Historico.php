<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model {

    protected $fillable = [
        'descricao', 
    ];

    public function user() {
        return $this->hasOne('\bemacash\User', 'foreign_key');
    }
    public function detalhePedido() {
        return $this->hasOne('\bemacash\DetalhePedido', 'foreign_key');
    }

}
