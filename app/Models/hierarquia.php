<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hierarquia extends Model
{
    use HasFactory;
    protected $table = 'hierarquias';
    protected $fillable = [
        'nome',
        'descricao',
        'id_usuario_ultima_alteracao',
    ];
}

