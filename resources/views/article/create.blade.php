@extends('base')
@section('title', 'Ici tu va nous créer ta best citronnade')
@section('content')




<form action="{{route('store_article')}}" method="post" >
    @csrf


    <div class=" container-fluid justify-content-center mt-5 row">

        <div class="col-6 bg-warning-subtle rounded-3 p-3">
            <h1 class="text-center">Créer une Citronnade</h1>

            <a href="{{route('app_home')}}"><img src="img/logo.png" alt=""></a>
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif


            @if ($errors)
            @foreach ($errors->all() as $error )
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" id="contenu" placeholder="Nom de la citronnade" value="{{old('titre')}}">

              </div>
              <div class="mb-3">
                <label for="contenu" class="form-label">Recette de cette citronnade</label>
                <textarea class="form-control" name="contenu" id="contenu" rows="3" value="{{old('contenu')}}"></textarea>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Ajoute ta plus belle image</label>
                <input type="file" class="form-control" name="image" id="image" rows="3" accept=".jpg, .jpeg, .png">
              </div>
              <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie</label>
                <input type="text" class="form-control" name="categorie" id="categorie" placeholder="Choisie la categorie" value="{{old('categorie')}}">
              </div>
              <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-success">Créer</button>
              </div>


        </div>
    </div>

</form>



@endsection
