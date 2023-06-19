<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VendasController;
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
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index',])->name('dashboard.index');

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
    Route::get('/', [VendasController::class, 'index'])->name('vendas.index');
    Route::get('/cadastrarVendas', [VendasController::class, 'cadastrarVendas'])->name('vendas.cadastro');
    Route::post('/cadastrarVendas', [VendasController::class, 'cadastrarVendas'])->name('vendas.cadastro');
    Route::get('/enviaComprovantePorEmail/{id}', [VendasController::class, 'enviaComprovantePorEmail'])->name('vendas.enviaComprovantePorEmail');
});

Route::prefix('usuario')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::delete('/delete', [UsuarioController::class, 'delete'])->name('usuario.delete');
    Route::get('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('usuario.cadastro');
    Route::post('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('usuario.cadastro');
    Route::get('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('usuario.att');
    Route::put('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('usuario.att');
});