<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\departamento;


class DepartamentoController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = departamento::all();
        return view('departamentos.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('departamentos.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        departamento::create($dados);
        return redirect()->route('departamentos');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= departamento::find($id);
        return view('departamentos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        departamento::find($id)->update($dados);
        return redirect()->route('departamentos');
    }
}
