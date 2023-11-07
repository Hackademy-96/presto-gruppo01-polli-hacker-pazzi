<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    {{$article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}

                </h1>
            </div>
        </div>
    </div>
    @if ($article_to_check)
    <div class="container">
        <div class="row">
            <div class="card-body text-center">
                <h4 class="card-title">{{$article_to_check->title}}</h4>
                <p class="text-muted">{{$article_to_check->description}}...</p>
                <p class="text-muted">{{$article_to_check->price}} €</p>
                <p>{{$article_to_check->created_at}}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn" type="submit">Accetta</button>
            </form>
            <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn" type="submit">Rifiuta</button>
            </form>
        </div>
    </div> 
    @endif
</x-layout>