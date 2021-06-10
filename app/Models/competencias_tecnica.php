<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competencias_tecnica extends Model
{
    use HasFactory;
    protected $table = 'competencias_tecnicas';
    protected $fillable = [
        'nome',
        'descricao',
        'id_setor',
        'id_usuario_ultima_alteracao',
    ];
}

