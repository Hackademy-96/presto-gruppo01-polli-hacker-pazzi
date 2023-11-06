<x-layout>
    <div class="container mt-100">
        
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="display-1 colorD">Tutti gli articoli</h1>
            </div>
            @forelse ($articles as $article)
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="card h-100 shadow-lg mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                    <div class="inner">
                        <div class="main-img"><img src="https://picsum.photos/500" alt="Category"></div>
                        {{-- <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div> --}}
                    </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$article->title}}</h4>
                        <p class="text-muted">{{$article->description}}...</p>
                        <p class="text-muted">{{$article->price}} €</p>
                        <a class="btn bgA btn-sm" href="{{route('article_show', compact('article'))}}" >Vai al dettaglio</a>
                    </div>
                </div>
            </div>
            @empty 
            <div class="col-12">
                <div class='alert alert-warning'>
                    <p class='lead'>Non ci sono annunci</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>