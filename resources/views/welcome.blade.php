<x-layout>
    <x-header></x-header>
    <div class="container mt-4">
        <div class="row text-center justify-content-center">
            <div class="col-6">
                @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulazioni! </strong>{{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            </div>
        </div>
    </div>
    <div class="container mt-100">
        <h1 class='text-center mb-5'>Ecco gli ultimi Articoli:</h1>
        <div class="row">
            @foreach ($lastArticles as $article)
                
          
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="h-100 card shadow-lg"><a class="card-img-tiles" href="#" data-abc="true">
                    <div class="inner">
                        <div class="main-img"><img src="https://picsum.photos/500" alt="Category"></div>
                        {{-- <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div> --}}
                    </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$article->title}}</h4>
                       <a class="btn btn-outline-primary btn-sm" href="{{route('article_show', compact('article'))}}" >Vai al dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</x-layout>





