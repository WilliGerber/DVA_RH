<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\ponto_melhoria;

class PontoMelhoriaController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = ponto_melhoria::all();
        return view('pontos_melhorias.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('pontos_melhorias.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        ponto_melhoria::create($dados);
        return redirect()->route('pontos_melhorias');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro = ponto_melhoria::find($id);
        return view('pontos_melhorias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        ponto_melhoria::find($id)->update($dados);
        return redirect()->route('pontos_melhorias');
    }
}
