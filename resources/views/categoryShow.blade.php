<x-layout>
    <div class="container-fluid mt-5 bgS">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h3>{{__('ui.catTitolo')}}</h3>
                <h2 class="colorP">{{__("ui.$category->name")}}</h2>
            </div>
            {{-- {{$article->category_id == $category->id ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}} --}}
            @forelse ($articles as $article)
            @if ($article->category_id == $category->id)
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="card shadow-lg mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                    <div class="inner">
                        <div class="main-img"><img src="{{!$article->images()->get()->isEmpty() ? Storage::url($article->images()->first()->path) : 'https://picsum.photos/500'}}" alt="Category"></div>
                        {{-- <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div> --}}
                    </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$article->title}}</h4>
                        <p class="text-muted">{{$article->description}}</p>
                        <p class="text-muted">{{$article->price}}</p><a class="btn bgA btn-sm" href="{{route('article_show', compact('article'))}}" >{{__('ui.weDett')}}</a>
                    </div>
                </div>
            </div>
            @endif
            @empty

            @endforelse
        </div>
        <div class="divAltezza"></div>
    </div>
    
    
</x-layout>