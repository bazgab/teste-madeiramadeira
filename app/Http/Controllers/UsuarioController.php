<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuario = Usuario::all();
        return view('usuarios.index', ['usuarios' => $usuario]);

    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'cpf' => 'required|numeric',
            'dt_inclusao' => 'required|numeric',
            'dt_alteracao' => 'required|numeric'
        ]);

        $newUsuario = Usuario::create($data);

        return redirect(route('usuarios.index'));

    }

    public function edit(Usuario $usuario){
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update_user(Usuario $usuario, Request $request){
        $data = $request->validate([
            'nome' => 'required',
            'cpf' => 'required|numeric',
            'dt_inclusao' => 'required|numeric',
            'dt_alteracao' => 'required|numeric'
        ]);

        $usuario->update($data);

        return redirect(route('usuarios.index'))->with('success');

    }

    public function delete(Usuario $usuario){
        $usuario->delete();
        return redirect(route('usuarios.index'))->with('success');
    }


}
