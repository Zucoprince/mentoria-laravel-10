<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestCliente;
use App\Models\Clientes;
use App\Models\Componentes;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    protected $cliente;

    public function __construct(Clientes $produto)
    {
        $this->cliente = $produto;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.Clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = Clientes::find($id);
        $buscarRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarCliente(FormRequestCliente $request)
    {
        if ($request->method() == "POST") {
            $data = $request->all();
            $componentes = new Componentes();
            Clientes::create($data);
            Toastr::success('Cliente cadastrado com sucesso!');
            return redirect()->route('clientes.index');
        }
        return view('pages.Clientes.create');
    }

    public function atualizarCliente(FormRequestCliente $request, $id)
    {
        if ($request->method() == "PUT") {
            
            $data = $request->all();
            $buscaRegistro = Clientes::find($id);
            $buscaRegistro->update($data);
            Toastr::success('Cliente cadastrado com sucesso!');
            return redirect()->route('clientes.index');
        }

        $findCliente = Clientes::where('id', '=', $id)->first();
        return view('pages.Clientes.atualiza', compact('findCliente'));
    }
}
