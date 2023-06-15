<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('produto.cadastro');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('produto.cadastro');
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('produto.att');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('produto.att');
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
    Route::delete('/delete', [ClientesController::class, 'delete'])->name('clientes.delete');
    Route::get('/cadastrarClientes', [ClientesController::class, 'cadastrarCliente'])->name('clientes.cadastro');
    Route::post('/cadastrarClientes', [ClientesController::class, 'cadastrarCliente'])->name('clientes.cadastro');
    Route::get('/atualizarClientes/{id}', [ClientesController::class, 'atualizarCliente'])->name('clientes.att');
    Route::put('/atualizarClientes/{id}', [ClientesController::class, 'atualizarCliente'])->name('clientes.att');
});

Route::prefix('vendas')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('vendas.index');
    Route::get('/cadastrarVendas', [ClientesController::class, 'cadastrarVendas'])->name('vendas.cadastro');
    Route::post('/cadastrarVendas', [ClientesController::class, 'cadastrarVendas'])->name('vendas.cadastro');
});
