<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class DetalhePedido extends Model {
    
     protected $fillable = [
        'contratoDeLicenca', 'status', 'telefoneDeEnvio' ,'preco', 'cnpjDeEnvio', 'comentario',
        'executivoDeVendas', 'numeroDoPedidoDeH ardware', 'numeroNotaFiscal',
        'dataDaEmissaoDaNotaFiscal',
    ];

    public function pedido() {
        return $this->hasOne('\bemacash\Pedido', 'foreign_key');
    }

}
