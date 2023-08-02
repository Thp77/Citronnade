@extends('base')
@section('title', 'Un accueil Frais !')
@section('content')
    <h1 class="container text-center mt-3 mb-3">Bienvenue sur un Site-Rond <br> Le paradis des amateurs de boissons
        rafraîchissantes ! </h1>
    <div class="container" style="background-color: #cfe8d5;  width:auto; border-radius:5px">
        <div class="row">
            <div class="col-md-6  p-3">

                <p>Bienvenue sur Site-Rond, où nous mettons les boissons rafraîchissantes à l'honneur ! Préparez-vous à
                    plonger dans un monde débordant de recettes désaltérantes, tout en découvrant les bienfaits de ces
                    breuvages revigorants. Nous sommes là pour vous offrir une expérience pétillante, avec une pointe
                    d'humour et une dose de fantaisie</p>
                <p>Imaginez-vous, confortablement installé dans votre fauteuil, cherchant désespérément une boisson pour
                    vous rafraîchir par une journée étouffante. C'est là que Site-Rond entre en jeu, prêt à vous embarquer
                    dans un tourbillon de saveurs rafraîchissantes ! Nous avons rassemblé pour vous une sélection exquise de
                    recettes de boissons, des classiques intemporels aux variantes audacieuses qui éveilleront vos papilles.
                </p>
                <p>Mais ce n'est pas tout, laissez-moi vous parler des bienfaits de ces breuvages. Saviez-vous que nombre
                    d'entre eux regorgent de vitamines et d'antioxydants, qui apportent un coup de fouet à votre système
                    immunitaire et vous donnent une énergie débordante ? Oui, ces boissons sont bien plus que de simples
                    rafraîchissements, elles sont de véritables super-héros de la désaltération, prêts à vous propulser vers
                    de nouveaux sommets d'énergie et de vitalité.

                    Mais ce n'est pas tout, car ces boissons peuvent également jouer un rôle de détoxifiant naturel. Elles
                    aident à purifier votre organisme en éliminant les toxines, vous laissant ainsi une sensation de
                    fraîcheur et de légèreté. Imaginez-vous rayonnant de l'intérieur, tel un soleil illuminant votre
                    journée.

                    Alors, qu'attendez-vous ? Rejoignez la communauté des amateurs de boissons rafraîchissantes sur
                    Site-Rond et laissez-vous séduire par nos recettes qui éveilleront vos papilles. Que vous soyez adepte
                    des saveurs classiques ou explorateur intrépide en quête de nouvelles sensations, notre site saura vous
                    combler. Préparez-vous à être inspiré, à rire aux éclats et à faire de la boisson votre compagne
                    favorite !

                    Mais attention, une fois que vous aurez goûté à nos recettes, il sera difficile de faire marche arrière.
                    Vous risquez de vous surprendre à dire "Site-Rond, mon bonheur quotidien, où étais-tu tout ce temps ?".
                    Et c'est tout à fait normal, car nos boissons sont bien plus qu'un simple rafraîchissement, elles sont
                    un véritable art de vivre.

                    Alors, embarquez dans cette aventure désaltérante avec Site-Rond, et laissez la magie des boissons vous
                    transformer en une personne rafraîchissante. Et n'oubliez pas, souriez, dégustez vos boissons et
                    savourez chaque gorgée de bonheur !</p>
                <p>Notre communauté dynamique de citronnadiers partage ses expériences, ses recettes favorites et ses
                    astuces secrètes pour vous aider à devenir un expert de la citronnade. Rejoignez-nous dès aujourd'hui et
                    plongez dans le monde rafraîchissant de la citronnade sur Site-Rond !</p>
                <p>N'attendez plus, <a class="text-decoration-none" href="{{ route('register') }}">inscrivez-vous</a> dès
                    maintenant pour rejoindre la
                    communauté des passionnés de citronnade !</p>
            </div>
            <div class="col-md-6">
                <slot name="image">
                    <img src="assets/img/logo.png" alt="Image" style="width: 100%;">
                </slot>
            </div>
        </div>
    </div>


    <h2 class="container-fluid text-center  mt-3">Nos derniers articles </h2>

    <div id="slider" class=" carousel  " data-bs-ride="carousel">
        <div class="  d-flex carousel-inner  mt-3 align-item-center  justify-content-center  ">
            @foreach ($articles as $index => $article)
                <div class="carousel-item  @if ($loop->first) active @endif">
                    <div class="card shadow p-3 mb-5 rounded bg-warning-subtle " style="width: 20rem;">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->image }}">
                        <div class="card-body ">
                            <h5 class="card-title ">{{ $article->titre }}</h5>
                            <p class="card-text ">{{ substr($article->contenu, 0, 99) }}...</p>
                            <a href="{{ route('citronnade.index', $article->id) }}" class="btn btn-success">Lire plus </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>


    <script>
        const slider = new bootstrap.Carousel(document.getElementById('slider'), {
            interval: false
        });
    </script>
@endsection
