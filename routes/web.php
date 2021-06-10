<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EscolaridadeGrauController;
use App\Http\Controllers\HierarquiaController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ExtraCurricularCursoController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\CompetenciasTecnicaController;
use App\Http\Controllers\CompetenciasComportamentalController;
use App\Http\Controllers\SetorAvaliacaoItemController;
use App\Http\Controllers\PontoForteController;
use App\Http\Controllers\PontoMelhoriaController;
use App\Http\Controllers\PermissaoController;




// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('login.entrar');
Route::get('/login/sair', [LoginController::class, 'sair'])->name('login.sair');


// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// USUARIOS
Route::get('/usuarios/criar-usuario', [UsuarioController::class, 'criarUsuario'])->name('usuarios.criar-usuario');

// DEPARTAMENTOS
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos');
Route::get('/departamentos/adicionar', [DepartamentoController::class, 'adicionar'])->name('departamentos.adicionar');
Route::post('/departamentos/salvar', [DepartamentoController::class, 'salvar'])->name('departamentos.salvar');
Route::get('/departamentos/editar/{id}', [DepartamentoController::class, 'editar'])->name('departamentos.editar');
Route::put('/departamentos/atualizar/{id}', [DepartamentoController::class, 'atualizar'])->name('departamentos.atualizar');

// ESCOLARIDADE
Route::get('/escolaridade_graus', [EscolaridadeGrauController::class, 'index'])->name('escolaridade_graus');
Route::get('/escolaridade_graus/adicionar', [EscolaridadeGrauController::class, 'adicionar'])->name('escolaridade_graus.adicionar');
Route::post('/escolaridade_graus/salvar', [EscolaridadeGrauController::class, 'salvar'])->name('escolaridade_graus.salvar');
Route::get('/escolaridade_graus/editar/{id}', [EscolaridadeGrauController::class, 'editar'])->name('escolaridade_graus.editar');
Route::put('/escolaridade_graus/atualizar/{id}', [EscolaridadeGrauController::class, 'atualizar'])->name('escolaridade_graus.atualizar');

// CARGOS
Route::get('/cargos', [CargoController::class, 'index'])->name('cargos');
Route::get('/cargos/adicionar', [CargoController::class, 'adicionar'])->name('cargos.adicionar');
Route::post('/cargos/salvar', [CargoController::class, 'salvar'])->name('cargos.salvar');
Route::get('/cargos/editar/{id}', [CargoController::class, 'editar'])->name('cargos.editar');
Route::put('/cargos/atualizar/{id}', [CargoController::class, 'atualizar'])->name('cargos.atualizar');

// HIERARQUIAS
Route::get('/hierarquias', [HierarquiaController::class, 'index'])->name('hierarquias');
Route::get('/hierarquias/adicionar', [HierarquiaController::class, 'adicionar'])->name('hierarquias.adicionar');
Route::post('/hierarquias/salvar', [HierarquiaController::class, 'salvar'])->name('hierarquias.salvar');
Route::get('/hierarquias/editar/{id}', [HierarquiaController::class, 'editar'])->name('hierarquias.editar');
Route::put('/hierarquias/atualizar/{id}', [HierarquiaController::class, 'atualizar'])->name('hierarquias.atualizar');

// SETORES
Route::get('/setores', [SetorController::class, 'index'])->name('setores');
Route::get('/setores/adicionar', [SetorController::class, 'adicionar'])->name('setores.adicionar');
Route::post('/setores/salvar', [SetorController::class, 'salvar'])->name('setores.salvar');
Route::get('/setores/editar/{id}', [SetorController::class, 'editar'])->name('setores.editar');
Route::put('/setores/atualizar/{id}', [SetorController::class, 'atualizar'])->name('setores.atualizar');

// EMPRESAS
Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas');
Route::get('/empresas/adicionar', [EmpresaController::class, 'adicionar'])->name('empresas.adicionar');
Route::post('/empresas/salvar', [EmpresaController::class, 'salvar'])->name('empresas.salvar');
Route::get('/empresas/editar/{id}', [EmpresaController::class, 'editar'])->name('empresas.editar');
Route::put('/empresas/atualizar/{id}', [EmpresaController::class, 'atualizar'])->name('empresas.atualizar');

// CARGOS
Route::get('/cargos', [CargoController::class, 'index'])->name('cargos');
Route::get('/cargos/adicionar', [CargoController::class, 'adicionar'])->name('cargos.adicionar');
Route::post('/cargos/salvar', [CargoController::class, 'salvar'])->name('cargos.salvar');
Route::get('/cargos/editar/{id}', [CargoController::class, 'editar'])->name('cargos.editar');
Route::put('/cargos/atualizar/{id}', [CargoController::class, 'atualizar'])->name('cargos.atualizar');

// CURSOS EXTRA CURRICULARES
Route::get('/extra_curricular_cursos', [ExtraCurricularCursoController::class, 'index'])->name('extra_curricular_cursos');
Route::get('/extra_curricular_cursos/adicionar', [ExtraCurricularCursoController::class, 'adicionar'])->name('extra_curricular_cursos.adicionar');
Route::post('/extra_curricular_cursos/salvar', [ExtraCurricularCursoController::class, 'salvar'])->name('extra_curricular_cursos.salvar');
Route::get('/extra_curricular_cursos/editar/{id}', [ExtraCurricularCursoController::class, 'editar'])->name('extra_curricular_cursos.editar');
Route::put('/extra_curricular_cursos/atualizar/{id}', [ExtraCurricularCursoController::class, 'atualizar'])->name('extra_curricular_cursos.atualizar');

// COLABORADORES
Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores');
Route::get('/colaboradores/adicionar', [ColaboradorController::class, 'adicionar'])->name('colaboradores.adicionar');
Route::post('/colaboradores/salvar', [ColaboradorController::class, 'salvar'])->name('colaboradores.salvar');
Route::get('/colaboradores/editar/{id}', [ColaboradorController::class, 'editar'])->name('colaboradores.editar');
Route::put('/colaboradores/atualizar/{id}', [ColaboradorController::class, 'atualizar'])->name('colaboradores.atualizar');

// COMPETENCIAS TECNICAS
Route::get('/competencias_tecnicas', [CompetenciasTecnicaController::class, 'index'])->name('competencias_tecnicas');
Route::get('/competencias_tecnicas/adicionar', [CompetenciasTecnicaController::class, 'adicionar'])->name('competencias_tecnicas.adicionar');
Route::post('/competencias_tecnicas/salvar', [CompetenciasTecnicaController::class, 'salvar'])->name('competencias_tecnicas.salvar');
Route::get('/competencias_tecnicas/editar/{id}', [CompetenciasTecnicaController::class, 'editar'])->name('competencias_tecnicas.editar');
Route::put('/competencias_tecnicas/atualizar/{id}', [CompetenciasTecnicaController::class, 'atualizar'])->name('competencias_tecnicas.atualizar');

// COMPETENCIAS COMPORTAMENTAIS
Route::get('/competencias_comportamentais', [CompetenciasComportamentalController::class, 'index'])->name('competencias_comportamentais');
Route::get('/competencias_comportamentais/adicionar', [CompetenciasComportamentalController::class, 'adicionar'])->name('competencias_comportamentais.adicionar');
Route::post('/competencias_comportamentais/salvar', [CompetenciasComportamentalController::class, 'salvar'])->name('competencias_comportamentais.salvar');
Route::get('/competencias_comportamentais/editar/{id}', [CompetenciasComportamentalController::class, 'editar'])->name('competencias_comportamentais.editar');
Route::put('/competencias_comportamentais/atualizar/{id}', [CompetenciasComportamentalController::class, 'atualizar'])->name('competencias_comportamentais.atualizar');

// SETOR AVALIACAO ITENS
Route::get('/setor_avaliacao_itens', [SetorAvaliacaoItemController::class, 'index'])->name('setor_avaliacao_itens');
Route::get('/setor_avaliacao_itens/adicionar', [SetorAvaliacaoItemController::class, 'adicionar'])->name('setor_avaliacao_itens.adicionar');
Route::post('/setor_avaliacao_itens/salvar', [SetorAvaliacaoItemController::class, 'salvar'])->name('setor_avaliacao_itens.salvar');
Route::get('/setor_avaliacao_itens/editar/{id}', [SetorAvaliacaoItemController::class, 'editar'])->name('setor_avaliacao_itens.editar');
Route::put('/setor_avaliacao_itens/atualizar/{id}', [SetorAvaliacaoItemController::class, 'atualizar'])->name('setor_avaliacao_itens.atualizar');

// PONTOS FORTES
Route::get('/pontos_fortes', [PontoForteController::class, 'index'])->name('pontos_fortes');
Route::get('/pontos_fortes/adicionar', [PontoForteController::class, 'adicionar'])->name('pontos_fortes.adicionar');
Route::post('/pontos_fortes/salvar', [PontoForteController::class, 'salvar'])->name('pontos_fortes.salvar');
Route::get('/pontos_fortes/editar/{id}', [PontoForteController::class, 'editar'])->name('pontos_fortes.editar');
Route::put('/pontos_fortes/atualizar/{id}', [PontoForteController::class, 'atualizar'])->name('pontos_fortes.atualizar');

// PONTOS MELHORIAS
Route::get('/pontos_melhorias', [PontoMelhoriaController::class, 'index'])->name('pontos_melhorias');
Route::get('/pontos_melhorias/adicionar', [PontoMelhoriaController::class, 'adicionar'])->name('pontos_melhorias.adicionar');
Route::post('/pontos_melhorias/salvar', [PontoMelhoriaController::class, 'salvar'])->name('pontos_melhorias.salvar');
Route::get('/pontos_melhorias/editar/{id}', [PontoMelhoriaController::class, 'editar'])->name('pontos_melhorias.editar');
Route::put('/pontos_melhorias/atualizar/{id}', [PontoMelhoriaController::class, 'atualizar'])->name('pontos_melhorias.atualizar');

// PERMISSOES
Route::get('/permissoes', [PermissaoController::class, 'index'])->name('permissoes');
Route::get('/permissoes/adicionar', [PermissaoController::class, 'adicionar'])->name('permissoes.adicionar');
Route::post('/permissoes/salvar', [PermissaoController::class, 'salvar'])->name('permissoes.salvar');
Route::get('/permissoes/editar/{id}', [PermissaoController::class, 'editar'])->name('permissoes.editar');
Route::put('/permissoes/atualizar/{id}', [PermissaoController::class, 'atualizar'])->name('permissoes.atualizar');