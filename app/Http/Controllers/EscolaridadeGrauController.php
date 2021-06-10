<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\escolaridade_grau;

class EscolaridadeGrauController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = escolaridade_grau::all();
        return view('escolaridade_graus.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('escolaridade_graus.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        escolaridade_grau::create($dados);
        return redirect()->route('escolaridade_graus');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= escolaridade_grau::find($id);
        return view('escolaridade_graus.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        escolaridade_grau::find($id)->update($dados);
        return redirect()->route('escolaridade_graus');
    }
}
