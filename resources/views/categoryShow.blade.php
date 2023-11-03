<x-layout><div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h3>Guarda tutti gli articoli in</h3>
            <h2 class="colorP">{{$category->name}}</h2>

        </div>

        @foreach ($articles as $article)
        @if ($article->category_id == $category->id)
        <div class="col-md-4 col-sm-6 mb-5">
            <div class="card shadow-lg mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                    <div class="main-img"><img src="https://picsum.photos/20{{$article->id}}" alt="Category"></div>
                    {{-- <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div> --}}
                </div></a>
                <div class="card-body text-center">
                    <h4 class="card-title">{{$article->title}}</h4>
                    <p class="text-muted">{{$article->description}}</p>
                    <p class="text-muted">{{$article->price}}</p><a class="btn btn-outline-primary btn-sm" href="{{route('article_show', compact('article'))}}" >Vai al dettaglio</a>
                </div>
            </div>
        </div>
    @endif
        @endforeach
    </div>
</div>
   
   
</x-layout>