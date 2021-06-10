<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setor_avaliacao extends Model
{
    use HasFactory;
    protected $table = 'setor_avaliacao_item';
    protected $fillable = [
        'nome',
        'descricao',
        'id_setor',
        'id_usuario_ultima_alteracao',
    ];
}
}
