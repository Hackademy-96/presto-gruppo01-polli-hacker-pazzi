<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top py-2 px-3 transition">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/">
            <img src="https://companieslogo.com/img/orig/PRST_BIG.D-3cd298b6.png?t=1687683317" width=100px alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav me-auto">
                
                {{-- <li class="nav-item">
                    <a class="nav-link navlink text-white" href="#">
                        <i class="fas fa-envelope" ></i> Contatti
                    </a>
                </li> --}}
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
                    <a class="nav-link btn btn-secondary dropdown-toggle text-white text-start" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-hashtag"></i> Categorie
                    </a>
                    
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <li class="nav-item">
                    <a class="nav-link navlink text-white" href="{{route('article_index')}}">
                        <i class="fa-solid fa-inbox"></i> Tutti gli articoli
                    </a>
                </li>
                
                @auth
                <li class="nav-item">
                    <a class="nav-link navlink text-white" href="{{route('article_create')}}">
                        <i class="fa-solid fa-pen-to-square"></i> Crea il tuo annuncio!
                    </a>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link navlink text-white" href="{{route('reviosr.index')}}">
                        <i class="fa-solid fa-pen-to-square"></i> RevisorZone
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Article::toBeRevisionedCount()}}
                            <span class="visually-hidden">Messaggi non letti</span>
                        </span>
                    </a>
                </li>
                @endif
                
                <li class="nav-item dropdown">
                    <a class="nav-link navlink active dropdown-toggle fw-bold colorS" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i> Ciao {{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button class="nav-link active" type="submit">Logout</button>
                            </form>
                        </li>
                    </li>        
                    
                    @endauth
                </ul>
            </ul>
            <form action="{{route('articles.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn bgS colorD" type="submit">Search</button>
            </form>
            
            
        </div>
    </div>
</nav>