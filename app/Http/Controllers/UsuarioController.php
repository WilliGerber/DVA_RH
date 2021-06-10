<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioController extends Controller
{   
    public function criarUsuario () {
        $usuario = new User;
        $usuario->name = "Willi";
        $usuario->email = "willi.gerber@gmail.com";
        $usuario->password = Hash::make('teste');
        $usuario->save();
    }  
}
