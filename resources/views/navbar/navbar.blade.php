

<nav class="navbar navbar-expand-lg bg-warning-subtle bg-opacity-10 border-bottom border-dark sticky-top">
    <div class="container-fluid">
      <a href="{{route('app_home')}}"><img style="height: 95px" src="../assets/img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('app_home')}}">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('citronnade.index')}}">Les citronnades</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Espace Utilisateur
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Connexion</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">S'inscrire</a></li>
             </ul>
          @endguest
             @auth
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->nom}} {{Auth::user()->prenom}}
                </a>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="{{route('dashboard')}}">Profil</a></li>
                    <li><a class="dropdown-item" href="{{route('article.index')}}">Voir mes Citronnades</a></li>
                    <li><a class="dropdown-item" href="{{route('article.create')}}">Editer une recette</a></li>
                  <li><a class="dropdown-item" href="{{route('logout')}}">Déconnexion</a></li>

                 </ul>
             @endauth
             <li class="nav-item">
                <a class="nav-link" href="{{route('app_about')}}">A propos</a>
              </li>

      </div>
    </div>
  </nav>
