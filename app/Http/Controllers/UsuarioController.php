<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Http\Requests\UsuarioFormRequest;
use App\Models\Componentes;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    protected $usuario;

    public function __construct(User $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findUsuario = $this->usuario->getUsuarioPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.usuarios.paginacao', compact('findUsuario'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = User::find($id);
        $buscarRegistro->delete();
    
        return response()->json(['success' => true]);


    }

    public function cadastrarUsuario(UsuarioFormRequest $request)
    {
        if ($request->method() == "POST") {
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            User::create($data);
            Toastr::success('Usuario cadastrado com sucesso!');
            return redirect()->route('usuario.index');
        }
        return view('pages.usuarios.create');
    }

    public function atualizarUsuario(UsuarioFormRequest $request, $id)
    {
        if ($request->method() == "PUT") {
            $data = $request->all();
            $buscaRegistro = User::find($id);
            $buscaRegistro->update($data);
            return redirect()->route('usuario.index');
        }

        $findUsuario = User::where('id', '=', $id)->first();
        return view('pages.usuarios.atualiza', compact('findUsuario'));
    }
}
