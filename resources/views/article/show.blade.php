@extends('base')
@section('title', 'Ici tu peut revoir ta recette ;)')
@section('content')


    <form action="{{route('article.update')}}" method="post">
        @csrf


        <div class=" container-fluid justify-content-center mt-5 row">

            <div class="col-6 bg-warning-subtle rounded-3 p-3">
                <h1 class="text-center">Editer la Citronnade</h1>


                @if ($errors)
                @foreach ($errors->all() as $error )
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <input type="text" name="id" value="{{$article->id}}"  style="display: none">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" name="titre" id="contenu" placeholder="Nom de la citronnade" value="{{$article['titre']}}">
                  </div>
                  <div class="mb-3">
                    <label for="contenu" class="form-label">Recette de cette citronnade</label>
                    <textarea class="form-control" name="contenu" id="contenu" rows="3" >{{$article->contenu}}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">Ajoute ta plus belle image</label>
                    <input type="file" class="form-control" name="image" id="image" rows="3" accept=".jpg, .jpeg, .png">
                  </div>
                  <div class="mb-3">
                    <label for="categorie" class="form-label">Catégorie</label>
                    <input type="text" class="form-control" name="categorie" id="categorie" placeholder="Choisie la categorie" value="{{$article['categorie']}}">
                  </div>
                  <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success">Modifier</button>
                  </div>


            </div>
        </div>

    </form>


@endsection
