@extends('base')
@section('title', 'Ici ce trouve toute tes Citronnades')
@section('content')

    <div class="container text-center mt-3">
        <h1>Bienvenue {{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h1>
    </div>
    {{-- {{$articles}} --}}
    @if (session('status'))
        <div class="container text-center alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="container-fluid">
        <table class="table table-warning table-bordered text-start">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th class="col-2">Titre</th>
                    <th class="col-4">Contenu</th>
                    <th class="col-1">Categorie</th>
                    <th>Photo</th>
                    <th class="col-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th>{{ $article->id }}</th>
                        <td>{{ $article->titre }}</td>
                        <td>
                            @if (strlen($article->contenu) > 100)
                                <span class="read-more-content">
                                    {{ substr($article->contenu, 0, 100) }} <span class="read-more-dots">...</span>
                                    <span class="read-more-hidden"
                                        style="display: none;">{{ substr($article->contenu, 100) }}</span>
                                </span>
                                @if (strlen($article->contenu) > 100)
                                    <a href="#"
                                        class="read-more-link text-decoration-none btn btn-success bg-success text-white ">Lire
                                        plus</a>
                                    <br>
                                    <br>
                                    <a href="#"
                                        class="read-less-link text-decoration-none btn btn-success bg-success text-white "
                                        style="display: none;">Lire moins</a>
                                @endif
                            @else
                                {{ $article->contenu }}
                            @endif
                        </td>
                        <td>{{ $article->categorie }}</td>
                        <td> {{-- testing photo --}}
                            <img src="{{ asset('storage/public/photos' . $article->image) }}" alt=" {{$article->image}}"></td>

                        @auth
                            <td>
                                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-success">Editer</a>
                                <a href="#" class="btn btn-danger">Effacer</a>
                            </td>
                        </tr>
                    @endauth
                @endforeach


            </tbody>
        </table>
    </div>

    <script>
        let readMoreContents = document.querySelectorAll('.read-more-content');
        let readMoreDots = document.querySelectorAll('.read-more-dots');
        let readMoreHiddens = document.querySelectorAll('.read-more-hidden');
        let readMoreLinks = document.querySelectorAll('.read-more-link');
        let readLessLinks = document.querySelectorAll('.read-less-link');

        for (let i = 0; i < readMoreLinks.length; i++) {
            readMoreLinks[i].addEventListener('click', function(e) {
                e.preventDefault();
                let index = Array.from(readMoreLinks).indexOf(this);
                readMoreDots[index].style.display = 'none';
                readMoreHiddens[index].style.display = 'inline';
                readMoreLinks[index].style.display = 'none';
                readLessLinks[index].style.display = 'inline';
            });
        }

        for (let i = 0; i < readLessLinks.length; i++) {
            readLessLinks[i].addEventListener('click', function(e) {
                e.preventDefault();
                let index = Array.from(readLessLinks).indexOf(this);
                readMoreDots[index].style.display = 'inline';
                readMoreHiddens[index].style.display = 'none';
                readMoreLinks[index].style.display = 'inline';
                readLessLinks[index].style.display = 'none';
            });
        }
    </script>
@endsection
