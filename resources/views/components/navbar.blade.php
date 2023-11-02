<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top text-white">
    <a class="navbar-brand" href="/">
        <i class="fas fa-home colorW" ></i> Home
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-info-circle" ></i> Info
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-envelope" ></i> Contatti
                </a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">
                    <i class="fas fa-user-plus"></i> Registrati
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">
                    <i class="fas fa-sign-in-alt"></i> Accedi
                </a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('article_create')}}">
                    <i class="fas fa-sign-in-alt"></i> Crea il tuo annuncio!
                </a>
            </li>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link active dropdown-toggle fw-bold colorS" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Ciao {{Auth::user()->name}}</a>
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