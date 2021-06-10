<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\setor;
use App\Models\departamento;
use Illuminate\Support\Facades\DB;

class SetorController extends Controller
{
    public function index() {

        $registros = DB::table('setores')
        ->join('departamentos', 'departamentos.id', '=', 'setores.id_departamento')
        ->select('setores.id as id', 'setores.nome as nome', 'setores.descricao as descricao', 'departamentos.nome as departamento')
        ->get();

        if(!Auth::check()) return redirect()->route('login');
        return view('setores.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        $departamentos = departamento::all();
        return view ('setores.adicionar', compact('departamentos'));
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        setor::create($dados);
        return redirect()->route('setores');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $departamentos = departamento::all();
        $registro= setor::find($id);
        return view('setores.editar', compact('registro', 'departamentos'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        setor::find($id)->update($dados);
        return redirect()->route('setores');
    }
}
