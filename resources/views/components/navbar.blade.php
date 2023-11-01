<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
        <a class="navbar-brand" href="#">
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
                    <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>