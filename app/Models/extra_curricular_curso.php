<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extra_curricular_curso extends Model
{
    use HasFactory;
    protected $table = 'extra_curricular_cursos';
    protected $dates = ['data_conclusao'];
    protected $fillable = [
        'nome',
        'descricao',
        'data_conclusao',
        'certificado',
        'carga_horaria',
        'id_usuario_ultima_alteracao',
    ];
}
