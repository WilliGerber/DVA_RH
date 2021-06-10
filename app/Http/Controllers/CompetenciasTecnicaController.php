<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\competencias_tecnica;
use App\Models\setor;


class CompetenciasTecnicaController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = competencias_tecnica::all();
        return view('competencias_tecnicas.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        $setores = setor::all();
        return view ('competencias_tecnicas.adicionar', compact('setores'));
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        competencias_tecnica::create($dados);
        return redirect()->route('competencias_tecnicas');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= competencias_tecnica::find($id);
        $setores = setor::all();
        return view('competencias_tecnicas.editar', compact('registro', 'setores'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        competencias_tecnica::find($id)->update($dados);
        return redirect()->route('competencias_tecnicas');
    }
}