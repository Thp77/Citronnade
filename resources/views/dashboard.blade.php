@extends('base')
@section('title', 'Ici ce trouve toute tes Citronnades')
@section('content')

<div class="container text-center mt-3">
    <h1>Bienvenue {{Auth::user()->nom}} {{Auth::user()->prenom}}</h1>
</div>

@endsection


