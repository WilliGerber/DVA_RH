<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissao extends Model
{
    use HasFactory;
    protected $table = 'permissoes';
    protected $fillable = [
        'nome',
        'descricao',
        'id_usuario_ultima_alteracao',
    ];
}