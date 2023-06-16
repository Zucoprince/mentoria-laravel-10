<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestVendas;
use App\Mail\ComprovanteDeVendaEmail;
use App\Models\Clientes;
use App\Models\Produto;
use App\Models\Vendas;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VendasController extends Controller
{
    protected $venda;

    public function __construct(Vendas $venda)
    {
        $this->venda = $venda;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findVenda = $this->venda->getVendasPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.vendas.paginacao', compact('findVenda'));
    }

    public function cadastrarVendas(FormRequestVendas $request)
    {
        $findNumeracao = Vendas::max('numero_venda') + 1;
        $findProduto = Produto::all();
        $findCliente = Clientes::all();

        if ($request->method() == "POST") {
            $data = $request->all();
            $data['numero_venda'] = $findNumeracao;
            Vendas::create($data);
            Toastr::success('Venda cadastrada com sucesso!');
            return redirect()->route('vendas.index');
        }

        return view('pages.Vendas.create', compact('findNumeracao', 'findProduto', 'findCliente'));
    }

    public function enviaComprovantePorEmail($id){

        $buscaVenda = Vendas::where('id', '=', $id)->first();
        $produtoNome = $buscaVenda->produto->nome;
        $clienteNome = $buscaVenda->cliente->nome;
        $clienteEmail = $buscaVenda->cliente->email;
        $sendMailData = [
            'produtoNome' => $produtoNome,
            'clienteNome' => $clienteNome,
        ];

        Mail::to($clienteEmail)->send(new ComprovanteDeVendaEmail($sendMailData));

        Toastr::success('Email enviado com sucesso!');
            return redirect()->route('vendas.index', compact('clienteNome'));

    }



}
