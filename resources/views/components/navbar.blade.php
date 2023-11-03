<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
    <a class="navbar-brand text-white" href="/">
        <i class="fas fa-home colorW" ></i> Home
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
                <a class="nav-link navlink text-white" href="#">
                    <i class="fas fa-envelope" ></i> Contatti
                </a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link navlink text-white" href="{{route('register')}}">
                    <i class="fas fa-user-plus"></i> Registrati
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlink text-white" href="{{route('login')}}">
                    <i class="fas fa-sign-in-alt"></i> Accedi
                </a>
            </li>
            @endguest

            <div class="nav-item dropdown">
                <a class="nav-link btn btn-secondary dropdown-toggle text-white " href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorie
                </a>
              
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                  <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                 @endforeach
                </ul>
              </div>

            @auth
            <li class="nav-item">
                <a class="nav-link navlink text-white" href="{{route('article_create')}}">
                    <i class="fas fa-sign-in-alt"></i> Crea il tuo annuncio!
                </a>
            </li>
      
            <li class="nav-item dropdown mx-3">
                <a class="nav-link navlink active dropdown-toggle fw-bold colorS" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Ciao {{Auth::user()->name}}</a>
                <ul class="dropdown-menu">
            <li class="dropdown-item">
           <form method="POST" action="{{route('logout')}}">
                @csrf
            <button class="nav-link active" type="submit">Logout</button>
        </form>
        </li>
            
           
            @endauth
        </ul>
    </div>
</nav>