<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaborador extends Model
{
    use HasFactory;
    protected $table = 'colaboradores';
    protected $dates = ['data_nascimento', 'data_admissao'];
    protected $fillable = [
        'nome',
        'data_nascimento',
        'id_hierarquia',
        'id_setor',
        'data_admissao',
        'id_cargo',
        'sexo',
        'estado_civil',
        'foto',

        // 'colaborador_cursos_extra_curriculares',

        'id_usuario_ultima_alteracao',
    ];
}