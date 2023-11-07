<x-layout>
    <x-header></x-header>
    <div class="container mt-4">
        <div class="row text-center justify-content-center">
            <div class="col-12 text-center">
                @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show bunner" role="alert">
                    <strong></strong>{{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            </div>
            <div class="col-6 justify-content-center">
                @if(session('access.denied'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('access.denied')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Ecco gli ultimi Articoli:</h1>
        <div class="row">
            @foreach ($lastArticles as $article)
                
          
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="h-100 card card-new shadow-lg"><a class="card-img-tiles" href="#" data-abc="true">
                    <div class="inner">
                        <div class="main-img position-relative"><img src="https://picsum.photos/500" alt="Category">
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bgC">
                                New
                                <span class="visually-hidden"></span>
                              </span>
                        </div>

                        {{-- <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div> --}}
                    </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$article->title}}</h4>
                       <a class="btn bgA btn-sm" href="{{route('article_show', compact('article'))}}" >Vai al dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
            <x-balloons></x-balloons>
        </div>
    </div>
</x-layout>





