<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model {

    protected $fillable = [
        'nome', 'modelo', 'referencia', 'imagem',
    ];

    public function kits() {
        return $this->belongsToMany('\bemacash\Kit', 'componente_kit', 'componente_id', 'kit_id');
    }

}
