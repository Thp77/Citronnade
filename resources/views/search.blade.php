@extends('base')
@section('title', 'Résultats de la recherche')
@section('content')

<div class="container  mb-3  bg-warning-subtle rounded-3 p-3  justify-content-center mt-5 row " >
  <h1>Résultats de la recherche</h1>


  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
  @if ($articles->isEmpty())
    <p>Aucun article trouvé.</p>
  @else
    @foreach ($articles as $article)
      <div class="card ">
        <div class="card-body">
          <h5 class="card-title">{{ $article->titre }}</h5>
          <p class="card-text">{{ $article->contenu }}</p>
        </div>
      </div>
    @endforeach
  @endif

</div>

@endsection
