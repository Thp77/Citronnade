@extends('base')
@section('title', 'Ici ce trouve les Citronnades')
@section('content')



<div class="container text-center mt-3">
    <h1>Bienvenue à la foire au Citronnade</h1>

</div>

    @foreach ($articles as $article)
        <div class="container-fluid  justify-content-center">
            <div class="row">
                <div class="col">
                    <div class="card bg-warning-subtle mt-3">
                        {{-- testing photo --}}
                        <img src="{{ asset('storage/public/photos' . $article->image) }}" alt="{{$article->image}}">
                        <div class="card-body">
                                <h3 class="card-title text-center">{{ $article->titre }}</h3>
                                <p>
                                    @if(strlen($article->contenu) > 100)
                                        <span class="read-more-content text-start">
                                            {{ substr($article->contenu, 0, 100) }} <span class="read-more-dots">...</span>
                                            <span class="read-more-hidden" style="display: none;">{{ substr($article->contenu, 100) }}</span>
                                        </span>
                                        @if(strlen($article->contenu) > 100)
                                        <br>
                                        <br>

                                            <a href="#" class="read-more-link text-decoration-none btn btn-success bg-success text-white  ">Lire plus</a>

                                            <a href="#" class="read-less-link text-decoration-none btn btn-success bg-success text-white " style="display: none;">Lire moins</a>
                                        @endif
                                    @else
                                        {{ $article->contenu }}
                                    @endif
                                </p>

                                <p class="card-text fw-bolder">{{ $article->categorie }}</p>


                            </div>

                    </div>
                </div>
            </div>

        </div>
    @endforeach
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
