<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\setor_avaliacao_item;
use App\Models\setor;


class SetorAvaliacaoItemController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = setor_avaliacao_item::all();
        return view('setor_avaliacao_itens.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        $setores = setor::all();
        return view ('setor_avaliacao_itens.adicionar', compact('setores'));
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        // dd($dados);
        setor_avaliacao_item::create($dados);
        return redirect()->route('setor_avaliacao_itens');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= setor_avaliacao_item::find($id);
        $setores= setor::all();
        return view('setor_avaliacao_itens.editar', compact('registro', 'setores'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        setor_avaliacao_item::find($id)->update($dados);
        return redirect()->route('setor_avaliacao_itens');
    }
}