<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\permissao;

class PermissaoController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = permissao::all();
        return view('permissoes.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('permissoes.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        permissao::create($dados);
        return redirect()->route('permissoes');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro = permissao::find($id);
        return view('permissoes.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        permissao::find($id)->update($dados);
        return redirect()->route('permissoes');
    }
}