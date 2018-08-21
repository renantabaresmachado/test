<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model {

    protected $fillable = [
        'descricao',
    ];

    public function detalhePedido() {
        return $this->belongsTo('\bemacash\DetalhePedido');
    }

    public function user() {
        return $this->belongsTo('\bemacash\User');
    }
    
    

}
