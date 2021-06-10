<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\empresa;
use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = empresa::all();
        return view('empresas.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('empresas.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        empresa::create($dados);
        return redirect()->route('empresas');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= empresa::find($id);
        return view('empresas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        empresa::find($id)->update($dados);
        return redirect()->route('empresas');
    }
}
