<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setor_avaliacao_item extends Model
{
    use HasFactory;
    protected $table = 'setor_avaliacao_itens';
    protected $fillable = [
        'nome',
        'descricao',
        'id_setor',
        'id_usuario_ultima_alteracao',
    ];
}