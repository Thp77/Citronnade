<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Récupère l'utilisateur actuellement authentifié
    $user = Auth::user();

    // Récupère les articles associés à l'utilisateur
    $articles = $user->articles;

    return view('article.index', compact('articles'));
}
    public function create()
    {

       return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //traitement de l'ajout d'un article
        $request->validate(
        [
            'titre'=>'required',
            'contenu'=>'required',
        ]
    );


    $user = Auth::user();
    $article = new Article();
    $article->titre = $request->titre;
    $article->contenu = $request->contenu;
    $article->categorie = $request->categorie;
    $article->image = $request->image;
    $article->user_id = $user->id;

    $article->save();

    return redirect()->route('article.index')->with('status','Félicitation votre citronnade est maintenant prêtre à être dégusté !!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Permet de modifier les champs d'un article

        $article = Article::find($id);
        return view('article.show', compact('article'));
    }


    /**
     *
     * Création de la fonction Search
     */

     public function search(Request $request)
     {
       $request->validate([
         'query' => 'required',
       ]);

       $query = $request->input('query');

       $articles = Article::where('titre', 'like', '%' . $query . '%')
                           ->orWhere('contenu', 'like', '%' . $query . '%')
                           ->get();

       return view('search', compact('articles'));
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
           //traitement de l'ajout d'un article
           $request->validate(
            [
                'titre'=>'required',
                'contenu'=>'required',
            ]
        );

        $article = Article::find($request->id);
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie = $request->categorie;
        $article->image = $request->image;

        $article->update();

        return redirect()->route('article.index', $request->id)->with('status','Félicitation votre citronnade est maintenant à jour !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
