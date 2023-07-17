<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Affiche le formulaire d'inscription
    public function form_register()
    {
        return view('register');
        
    }

    // traitement du formulaire d'inscription

    public function form_register_post(Request $request)
    {
        $request->validate
        ([

            'email' => 'required|email|unique:users',
            'nom' => 'required',
            'prenom' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user -> email = $request->email;
        $user -> nom = $request->nom;
        $user -> prenom = $request->prenom;
        $user -> password = Hash::make($request->password) ;
        $user -> save();

        return redirect()->route('register')->with('status','Vous êtes bien inscrit');
    }
}