@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">seleção Totvs</div>

                <ul class="collapsible" data-collapsible="accordion">
                    @foreach($pedidos as $p)
                    <li>
                        <div class="collapsible-header">
                            <i onclick="detail({{$p->id}})" class="material-icons">keyboard_arrow_down</i>
                            <p>Pedido{{$p->numeroPedido}} - {{$p->nome}} - {{$p->estado}} - {{$p->created_at}} </p>
                        </div>
                        <div class="collapsible-body">
                            <div  class="row">
                                <div  class="col s12">
                                    <div class="divider"></div>
                                    <p style="background-color: #f5f5f5">Pedido #{{$p->numeroPedido}} Detalhes</p>
                                    <div id="{{$p->id}}" class="section">

                                    </div>
                                </div>

                            </div>

                        </div>

                    </li>

                    @endforeach
                </ul>

            </div>
        </div>


    </div>
</div>

<script>
    function detail (id){
    //alert(id)
    const url = "http://localhost:8000/pedidos/show/" + id;
    var componentes = "";
    var licencas = "";
    var historicos = "";
    $.get(url, function (data) {
    //console.log(data.detalhepedido.endereco[0].estado);
    data.kits[0].componentes.map(componente => {
    componentes += '<p style="border:2px #f5f5f5 solid"  class="collection-item"><img style="margin: auto;" class="material-icons" width="30px" height="30px" src="/img_produtos/' + componente.imagem + '"><span class="badge">x1</span> ' + componente.nome + '</p>';
    })
            data.kits[0].licencas.map(licenca => {
    licencas += '<p style="border:2px #f5f5f5 solid"  class="collection-item"><img style="margin: auto;" class="material-icons" width="30px" height="30px" src="/img_produtos/logo.png"><span class="badge">x1</span> ' + licenca.nome + '</p>';
    })
            data.detalhepedido.historicos.map(hist => {
            if (hist.user == null){
            historicos += '<tr>' +
                    '<td>' + hist.created_at + '</td>' +
                    '<td>' + hist.descricao + '</td>' +
                    '<td></td>'
            } else{
            historicos += '<tr>' +
                    '<td>' + hist.created_at + '</td>' +
                    '<td>' + hist.descricao + '</td>' +
                    '<td>' + hist.user.name + '-' + hist.user.area + '</td>' +
                    '</tr>'
            }
            if (data.detalhepedido.comentario == null){
            data.detalhepedido.comentario = "";
            }
            if (data.detalhepedido.executivoDeVendas == null){
            data.detalhepedido.executivoDeVendas = "";
            }
            if (data.detalhepedido.numeroDoPedidoDeHardware == null){
            data.detalhepedido.numeroDoPedidoDeHardware = "";
            }
            if (data.detalhepedido.numeroNotaFiscal == null){
            data.detalhepedido.numeroNotaFiscal = "";
            }
            if (data.detalhepedido.dataDaEmissaoDaNotaFiscal == null){
            data.detalhepedido.dataDaEmissaoDaNotaFiscal = "";
            }
            })
            //console.log(hist.user);
            $('#' + id).html(
            '<div class="collection">' +
            '<p style="background-color:#80cbc4; color:#004d40" class="collection-item" ><span class="badge">x1</span>' + data.kits[0].nome + '</p>' +
            licencas + componentes + '</div>' +
            '<table class="striped">' +
            '<tbody>' +
            '<tr>' +
            '<td>Contrato de Licença</td>' +
            '<td>' + data.detalhepedido.contratoDeLicenca + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Status</td>' +
            '<td><span style="background-color:#ff9800;  padding:4px; border-radius:2px; color:white; font-weight: bold;">' + data.detalhepedido.status + '</span></td>' +
            '</tr>' +
            '<tr>' +
            '<td>Preço</td>' +
            '<td>R$' + data.detalhepedido.preco + ',00</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Data de Criação</td>' +
            '<td>' + data.detalhepedido.created_at + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>CNPJ para envio</td>' +
            '<td>' + data.detalhepedido.cnpjDeEnvio + '</td>' +
            '<tr>' +
            '<td>Estado para envio</td>' +
            '<td>' + data.detalhepedido.endereco[0].estado + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Telefone Para Envio</td>' +
            '<td>' + data.detalhepedido.telefoneDeEnvio + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>CEP para Envio</td>' +
            '<td>' + data.detalhepedido.endereco[0].cep + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Endereco para Envio</td>' +
            '<td>' + data.detalhepedido.endereco[0].logradouro+ '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>País para Envio</td>' +
            '<td>' + data.detalhepedido.endereco[0].pais + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Comentário do pedido</td>' +
            '<td>' + data.detalhepedido.comentario + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Executivo de Vendas</td>' +
            '<td>' + data.detalhepedido.executivoDeVendas + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Número do Pedido de Hardware</td>' +
            '<td>' + data.detalhepedido.numeroDoPedidoDeHardware + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>NFe número</td>' +
            '<td>' + data.detalhepedido.numeroNotaFiscal + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Data emissão NFe</td>' +
            '<td>' + data.detalhepedido.dataDaEmissaoDaNotaFiscal + '</td>' +
            '</tr>' +
            '</tbody>' +
            '</table>' +
            '<table class="striped">' +
            '<caption>Histórico do Pedido</caption>'
            + historicos +
            '</table>'
            )

    });
    }

</script>
</div>
@endsection
