<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestCliente;
use App\Models\Cliente;
use App\Models\Componentes;
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

    public function cadastrarCliente (FormRequestCliente $request)
    {
        if ($request->method() == "POST") {
            $data          = $request->all();
            $componentes   = new Componentes();
            $data['cpf']   = $componentes->formatacaoMascaraCpf($data['cpf']);
            $data['senha'] = '123456';
            Cliente::create($data);

            return redirect()->route('cliente.index');
        }

        return view('pages.clientes.create');
    }
}
