<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setor extends Model
{
    use HasFactory;
    protected $table = 'setores';
    protected $fillable = [
        'nome',
        'descricao',
        'id_departamento',
        'id_usuario_ultima_alteracao'
    ];
}
