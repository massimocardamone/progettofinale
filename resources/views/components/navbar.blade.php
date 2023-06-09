<nav class="navbar navbar-expand-lg navbar-custom mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Homepage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('create')}}">Aggiungi prodotto</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('article_index')}}">Tutti i prodotti</a>
          </li>
          <li class="nav-item">
            <form class="d-flex align-items-center mysearchbar" role="search">
              <input class="form-control myinputsearch me-2" type="search" placeholder="Cerca un prodotto" aria-label="Search">
              <button class="btn mybtn" type="submit">Search</button>
            </form>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              form
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Arredamento</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
        @auth
        <ul class="navbar-nav">  
          
          <li class="nav-item dropdown mydrop">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li>
                @if (Auth::user()->is_revisor)
                <li class="dropdown-item">
                  <a class="nav-link btnalert alert-danger btn-sm position-relative" aria-current="page" href="{{route('revisor_index')}}">Zona revisione
                    <span class="position-absolute top-0 start-75 translate_middle badge ruonded-pill bg-danger">
                      {{App\Models\Article::toBeRevisionedCount()}}
                  </a>
                  </span>
                  <span class="visually-hidden">Prodotti da accettare </span>
                
                @endif
              </li>
            <li class="dropdown-item"><form method="POST" action="{{route('logout')}}">
              @csrf
              <button class="dropdown-item">Logout</button>
           </form>
          </li>



          </ul>


            {{-- <form method="POST" action="{{route('logout')}}">
              @csrf
              <button class="mybtn">Logout</button>
          </form>  --}}
          </li>
        </ul>    
        @else
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link">Registrati</a>
            </li>
            <li class="nav-item me-md-3">
                <a href="{{route('login')}}" class="nav-link">Accedi</a>
            </li>
        </ul>
        @endauth
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>