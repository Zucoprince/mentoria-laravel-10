<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index () {
        $findProduto = Produto::all();
    
        return view('pages.produtos.paginacao', compact('findProduto'))
    ;}

    public function add () {
        return 'Adicionar Produtor'
    ;}
}
