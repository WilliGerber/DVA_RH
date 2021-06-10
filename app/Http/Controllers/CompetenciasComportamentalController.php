<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\competencias_comportamental;

class CompetenciasComportamentalController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = competencias_comportamental::all();
        return view('competencias_comportamentais.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('competencias_comportamentais.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        competencias_comportamental::create($dados);
        return redirect()->route('competencias_comportamentais');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= competencias_comportamental::find($id);
        return view('competencias_comportamentais.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        competencias_comportamental::find($id)->update($dados);
        return redirect()->route('competencias_comportamentais');
    }
}