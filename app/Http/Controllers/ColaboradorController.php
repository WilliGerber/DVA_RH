<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\colaborador;
use App\Models\hierarquia;
use App\Models\setor;
use App\Models\cargo;


class ColaboradorController extends Controller
{
    public function index() {
        $registros = DB::table('colaboradores')
        ->join('cargos', 'cargos.id', '=', 'colaboradores.id_cargo')
        ->select('colaboradores.id as id', 'colaboradores.nome as nome', 'colaboradores.data_admissao as data_admissao', 'cargos.nome as cargo')
        ->get();

        if(!Auth::check()) return redirect()->route('login');

        return view('colaboradores.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        $hierarquias = hierarquia::all();
        $setores = setor::all();
        $cargos = cargo::all();
        return view('colaboradores.adicionar', compact('hierarquias', 'setores', 'cargos'));
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        if ($req->file('foto')->isValid()) {
            $dados['foto'] = $req->file('foto')->store('foto');
        }
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        colaborador::create($dados);
        return redirect()->route('colaboradores');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        return view('colaboradores.editar');
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        setor::find($id)->update($dados);
        return redirect()->route('colaboradores');
    }
}
