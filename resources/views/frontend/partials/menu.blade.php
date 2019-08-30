  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">{{ env('APP_NAME') }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Accueil</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu">
                    @foreach (\App\Categorie::all() as $c )
                        <a class="dropdown-item" href="#">{{  $c->name }}</a>
                        <div class="dropdown-divider"></div>
                    @endforeach
                </div>
            </li>
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
            </li>
          @else
            {{-- @if(Auth::user()->role->id == 1) --}}
                @admin
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashbord</a>
                </li>
                @endadmin
                @auteur
            {{-- @elseif(Auth::user()->role->id == 2) --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auteur.dashboard') }}">Dashbord</a>
                </li>
                @endauteur
            {{-- @endif --}}
          @endguest

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
