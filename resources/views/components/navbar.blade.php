<nav class="navbar navbar-expand-lg bg-transparent sticky-top p-3 mt-4">

    <div class="container-fluid ">

      <a class="navbar-brand " href=""><img src="/media/logos.png" width="90" height="50" alt="logo"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto border-top border-bottom mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Articoli</a>
          </li>

          @auth

          <li class="nav-item dropdown border-top border-bottom">

            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>

            <ul class="dropdown-menu mx-auto">
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Esci</a></li>
              <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
              <li><a class="dropdown-item" href="">Inserisci Articolo</a></li>
              <li><hr class="dropdown-divider"></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              
            </ul>

          </li>
          @else
          <li class="nav-item ">
            <a class="nav-link" href="{{route('registerLogin')}}">
              Accedi
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="">
              Inserisci Articolo
            </a>
          </li>

          @endauth
        
        </ul>

        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        
      </div>

    </div>
  </nav>