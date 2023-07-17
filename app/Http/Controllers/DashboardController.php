<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Fonction pour afficher le Dashboard

    public function dashboard(){

        return view('dashboard');
    }

    // Fonction de déconnexion
    public function logout(){

       Auth::logout();

       return redirect()->route('login');
    }
}
