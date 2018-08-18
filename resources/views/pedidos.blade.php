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
                            <i class="material-icons">filter_drama</i>                            <p>Pedido{{$p->numeroPedido}} - {{$p->nome}} - {{$p->estado}} - {{$p->created_at}}</p>
                            <span class="new badge">4</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
