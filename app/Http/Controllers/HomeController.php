<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Permet d'afficher les articles sur la page d'accueil

    public function index()
    {
        $articles = Article::inRandomOrder()->get();
        return view('home.accueil', compact('articles'));
    }
}
