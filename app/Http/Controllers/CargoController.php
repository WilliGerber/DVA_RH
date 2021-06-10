<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\cargo;
use App\Models\setor;
use App\Models\empresa;



class CargoController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = cargo::all();
        return view('cargos.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        $setores = setor::all();
        $empresas = empresa::all();
        $cargos = cargo::all();
        return view ('cargos.adicionar', compact('setores', 'empresas', 'cargos'));
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        dd($dados);
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        cargo::create($dados);
        return redirect()->route('cargos');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= cargo::find($id);
        return view('cargos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        cargo::find($id)->update($dados);
        return redirect()->route('cargos');
    }
}


