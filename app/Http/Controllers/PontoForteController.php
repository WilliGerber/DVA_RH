<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\ponto_forte;

class PontoForteController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = ponto_forte::all();
        return view('pontos_fortes.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('pontos_fortes.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        ponto_forte::create($dados);
        return redirect()->route('pontos_fortes');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro = ponto_forte::find($id);
        return view('pontos_fortes.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        ponto_forte::find($id)->update($dados);
        return redirect()->route('pontos_fortes');
    }
}
