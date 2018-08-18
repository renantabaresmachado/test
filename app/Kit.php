<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model {

    protected $fillable = [
        'nome', 'tipoDeLicenca' ,
    ];

    public function componentes() {
       return $this->belongsToMany('\bemacash\Componente');
    }
    public function licencas() {
       return $this->belongsToMany('\bemacash\Licenca');
    }
    public function pedidos() {
       return $this->belongsToMany('\bemacash\Pedido');
    }

}
