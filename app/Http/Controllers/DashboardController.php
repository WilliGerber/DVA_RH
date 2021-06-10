<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;


class DashboardController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        return view('dashboard');
    }
}
