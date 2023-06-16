<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Produto;
use App\Models\Vendas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $ultimoProduto = Produto::all()->last();
        $ultimoCliente = Clientes::all()->last();
        $ultimaVenda = Vendas::all()->last();
        $diaProduto = Produto::all()->last()->created_at->format('d-M-y');
        $diaCliente = Clientes::all()->last()->created_at->format('d-M-y');
        $diaVenda = Vendas::all()->last()->created_at->format('d-M-y');

        return view('pages.Dashboard.dashboard', compact('ultimoProduto', 'ultimoCliente', 'ultimaVenda', 'diaProduto', 'diaCliente', 'diaVenda'));
    
    }
}
