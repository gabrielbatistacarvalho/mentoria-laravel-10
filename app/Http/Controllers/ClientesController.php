<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    protected $cliente;

    public function __construct(Cliente $cliente) 
    {
        $this->cliente = $cliente;
    }

    public function index (Request $request) 
    {
        $pesquisar   = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.clientes.paginacao', compact('findCliente'));
    }

    public function delete (Request $request)
    {
        $id            = $request->id;
        $buscaRegistro = Cliente::find($id);
        $buscaRegistro->delete();
        
        return response()->json(['success' => true]);
    }
}
