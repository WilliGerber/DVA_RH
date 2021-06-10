<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    use HasFactory;
    protected $table = 'cargos';
    protected $dates = ['data_revisao'];
    protected $fillable = [
        'nome',
        'id_setor',
        'id_cargo_superior',
        'id_empresa',
        'data_revisao',
        'descricao_sumaria',
        'descricao_detalhada',
        'experiencia_acumulada',

        // 'id_colaborador',
        // 'id_competencia_tecnica',
        
        // 'id_colaborador',
        // 'id_competencia_tecnica',

        'id_usuario_ultima_alteracao',
    ];
}
