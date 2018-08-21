<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class DetalhePedido extends Model {

    protected $fillable = [
        'contratoDeLicenca', 'status', 'telefoneDeEnvio', 'preco', 'cnpjDeEnvio', 'comentario',
        'executivoDeVendas', 'numeroDoPedidoDeH ardware', 'numeroNotaFiscal',
        'dataDaEmissaoDaNotaFiscal',
    ];

    public function pedido() {
        return $this->belongsTo('\bemacash\Pedido');
    }

    public function historicos() {
        return $this->hasMany('\bemacash\Historico', 'detalhePedido_id');
    }
    public function endereco (){
        
         return $this->hasMany('\bemacash\Endereco', 'detalhepedidos_id');
    }

}
