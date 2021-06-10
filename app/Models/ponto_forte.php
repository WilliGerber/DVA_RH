<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ponto_forte extends Model
{
    use HasFactory;
    protected $table = 'pontos_fortes';
    protected $fillable = [
        'nome',
        'descricao',
        'id_usuario_ultima_alteracao',
    ];
}