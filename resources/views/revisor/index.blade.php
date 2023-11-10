<x-layout>
  <div class="containner mt-5">
    <div class="row align-items-end mt-5 text-center">
      <div class="col-6">
        <h1 class="display-3">Bentornato {{Auth::user()->name}}</h1>
      </div>
      <div class="col-6">
        @if($article_to_check)
        {{-- {{__('ui.rev1')}} --}}
        <h2> Ci sono ancora {{App\Models\Article::toBeRevisionedCount()}} articoli da revisionare</h2>
        @else
        {{-- {{__('ui.rev2')}} --}}
        <h2> Non ci sono articoli da revisionare </h2>
        @endif
        
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-5">
      <div class="col-6 mt-5">
        <h1 class="text-center display-2">
          @if($article_to_check)
          Prossimo Annuncio:
          @endif
          
        </h1>
      </div>
    </div>
    @if ($article_to_check)
    
    <div class="row justify-content-start  mt-5">
      <div class="col-12 col-md-6">
        <div class="card p-4 " style="width: 40rem;">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            @if(count($article_to_check->images))
            <div class="carousel-inner rounded-4 shadow-lg">
              @foreach ($article_to_check->images as $image)
              <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="10000">
                <img src="{{Storage::url($image->path)}}" class="d-block w-100 imgCarousel" alt="...">
              </div>  
              @endforeach
            </div>
            @else
            <div class="carousel-inner rounded-4 shadow-lg "> 
              
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://picsum.photos/500" class="img-fluid w-100 imgCarousel " alt="...">
              </div>
              
              <div class="carousel-item" data-bs-interval="2000">
                <img src="https://picsum.photos/501" class="img-fluid w-100 imgCarousel " alt="...">
              </div>
              
              <div class="carousel-item">
                <img src="https://picsum.photos/502" class="img-fluid w-100 imgCarousel" alt="...">
              </div>
            </div>
            @endif 
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="card-body ms-5 ps-5">
          <h2 class="card-title mb-5">Caricato dall'utente : <span class="colorC">{{$article_to_check->user->name}}</span></h2>
          <h3 class="card-text colorP">Titolo :</h3>
          <p class="fs-5">{{$article_to_check->title}}</p>
          <h3 class="card-text colorP">Categoria :</h3>
          <p class="fs-5">{{$article_to_check->category->name}}</p>
          <h3 class="card-text colorP">Descrizione :</h3>
          <p class="fs-5">{{$article_to_check->description}}</p>
          <h3 class="card-text colorP"></h3>
          <p class="fs-5">{{$article_to_check->price}} €</p>
          <h3 class="card-text colorP">Data creazione :</h3>
          <p class="fs-5">{{$article_to_check->created_at->format('d/m/Y')}}</p>
          <div class="d-flex justify-content-around my-5">
            <form action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
              @csrf
              @method('PATCH')
              <button class="btn bgA btn-lg" type="submit">{{__('ui.revsi')}}</button>
            </form>
            <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
              @csrf
              @method('PATCH')
              <button class="btn bgC btn-lg" type="submit">{{__('ui.revno')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  
</x-layout>