<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <h1 class="text-center">
                    {{$article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}

                </h1>
            </div>
        </div>
    </div>
    
    @if ($article_to_check)
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="card " style="width: 40rem;">
                <img src="https://picsum.photos/800" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$article_to_check->title}}</h4>
                  <p class="card-text">{{$article_to_check->description}}...</p>
                  <p class="text-muted">{{$article_to_check->price}} €</p>
                  <p>{{$article_to_check->created_at}}</p>
                </div>
              </div>
            <div class="card-body text-center">

                <p class="text-muted"></p>

            </div>
        </div>
    </div>

    <div class="conteiner my-5">
        <div class="row justify-content-evenly text-center">
            <div class="col-6 ">
                <form action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn bgA btn-lg" type="submit">Accetta</button>
                </form>
            </div>
            
            <div class="col-6">
                <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn bgC btn-lg" type="submit">Rifiuta</button>
                </form>

            </div>
        </div> 
    </div>
    @endif
    
</x-layout>