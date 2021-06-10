<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class escolaridade_grau extends Model
{
    use HasFactory;
    protected $table = 'escolaridade_graus';
    protected $fillable = [
        'nome',
        'descricao',
        'id_usuario_ultima_alteracao',
    ];
}
