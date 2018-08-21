<?php

namespace bemacash\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $peds = \bemacash\Pedido::where('user_id', Auth::user()->id)->get();

        return view('Pedidos')->with('pedidos', $peds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $retorno;
        $ped = \bemacash\Pedido::where('id', $id)->first();

        /* formatando retorno para o pedido */
        $kits = $ped->kits;
        for ($i = 0; $i < count($kits); $i++) {
            $kits[$i]->componentes = $ped->kits[$i]->componentes;
        }

        for ($i = 0; $i < count($kits); $i++) {
            $kits[$i]->licencas = $ped->kits[$i]->licencas;
        }

        $retorno['kits'] = $kits;
        $detalhe = $ped->detalhePedido;
        $detalhe['endereco'] = $ped->detalhePedido->endereco;
       
        $hist = $ped->detalhePedido->historicos;
        for ($i = 0; $i < count($hist); $i++) {
            $hist[$i]->user = $ped->detalhePedido->historicos[$i]->user;
        }
        $detalhe['historicos'] = $hist;
        $retorno['detalhepedido'] = $detalhe;
    

       
        return response()->json($retorno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
