<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pontos_melhoria extends Model
{
    use HasFactory;
    protected $table = 'pontos_melhorias';
    protected $fillable = [
        'nome',
        'descricao',
        'id_usuario_ultima_alteracao',
    ];
}
