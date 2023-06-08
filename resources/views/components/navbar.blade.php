<nav class="navbar navbar-expand-lg navbar-custom mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Homepage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('create')}}">Aggiungi prodotto</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('article_index')}}">Tutti i prodotti</a>
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
        <ul class="navbar-nav mx-end">
          
          <li class="nav-item dropdown mydrop">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
            <li class="dropdown-item"><form method="POST" action="{{route('logout')}}">
              @csrf
              <button class="dropdown-item">Logout</button>
          </form></li>



          </ul>


            {{-- <form method="POST" action="{{route('logout')}}">
              @csrf
              <button class="mybtn">Logout</button>
          </form>  --}}
          </li>
        </ul>    
        @else
        <ul class="navbar-nav mx-end">
            <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link">Registrati</a>
            </li>
            <li class="nav-item me-md-3">
                <a href="{{route('login')}}" class="nav-link">Login</a>
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