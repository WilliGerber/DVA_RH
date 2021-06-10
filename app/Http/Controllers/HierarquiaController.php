<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\hierarquia;



class HierarquiaController extends Controller {
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = hierarquia::all();
        return view('hierarquias.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('hierarquias.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        hierarquia::create($dados);
        return redirect()->route('hierarquias');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= hierarquia::find($id);
        return view('hierarquias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        hierarquia::find($id)->update($dados);
        return redirect()->route('hierarquias');
    }
}

