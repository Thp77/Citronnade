<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Affiche la view login

    public function form_login()
    {

        return view('login');
    }

    //traitement du formulaire de login

    public function form_login_post(Request $request)
    {
       $auth = $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($auth)){

            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{

            return redirect()->route('login')->with('status','Le mot de passe est incorrect');


        }
    }
}
