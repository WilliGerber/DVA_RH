<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\extra_curricular_curso;

class ExtraCurricularCursoController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $registros = extra_curricular_curso::all();
        return view('extra_curricular_cursos.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        return view ('extra_curricular_cursos.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();

        if ($req->file('certificado')->isValid()) {
            $dados['certificado'] = $req->file('certificado')->store('certificados');
        }
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        extra_curricular_curso::create($dados);
        return redirect()->route('extra_curricular_cursos');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro= extra_curricular_curso::find($id);
        return view('extra_curricular_cursos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        extra_curricular_curso::find($id)->update($dados);
        return redirect()->route('extra_curricular_cursos');
    }
}