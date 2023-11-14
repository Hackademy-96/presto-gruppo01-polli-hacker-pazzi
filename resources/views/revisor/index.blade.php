<x-layout>
  <div class="container-fluid mt-5">    
    <div class="row  mt-5 justify-content-evenly">
      <div class="col-12 mt-5">
        <h1 class="display-1 text-center mt-2 colorP">{{__('ui.logTitolo')}} {{Auth::user()->name}}</h1>
      </div>
      <div class="col-12 text-center mt-3">
        @if($article_to_check)
        {{-- {{__('ui.rev1')}} --}}
        <h2> {{__('ui.ciSonoAncora')}} {{App\Models\Article::toBeRevisionedCount()}} {{__('ui.articoliDaRevisionare')}}</h2>
        @else
        {{-- {{__('ui.rev2')}} --}}
        <h2 > {{__('ui.rev2')}} </h2>
        @endif
        
      </div>
    </div>
  </div>
  @if(session('message'))
  <div class="container mt-3">
    <div class="row">
      <div class="col-12 d-flex justify-content-center text-center">
        <div class=" alert alert-success alert-dismissible fade show bunner" role="alert">
          <strong></strong>{{session('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  </div>
  @endif
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-12 ">
        <h1 class="display-3 text-center colorP">
          @if($article_to_check)
          {{__('ui.prossArt')}}
          @endif
          
        </h1>
      </div>
    </div>
  </div>
    @if ($article_to_check)
    
    <div class="container-fluid mt-5 ">
      <div class="row d-flex justify-content-center">
        <div class="col-8 col-md-4 ">
          <div>
            <div id="carouselExampleInterval" class="carousel carosello slide" data-bs-ride="carousel">
              @if(count($article_to_check->images))
              <div class="carousel-inner rounded-4 shadow-lg carouselSize">
                @foreach ($article_to_check->images as $image)
                <div class=" carousel-item slideC @if($loop->first) active @endif" data-bs-interval="10000">
                  <img src="{{Storage::url($image->path)}}" class="d-block w-100 h-100 imgCarousel" alt="...">
                </div>
                <div class="col-md-3 border-end">
                  <h5 class="tc-accent mt-3">Tags</h5>
                  <div class="p-2">
                    @if ($image->labels)
                    @foreach ($image->labels as $label)
                        <p class="d-inline">{{$label}}</p>
                    @endforeach
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card-body">
                    <h5 class="tc-accent">Revisione Immagine</h5>
                    <p>Adulti: <span class="{{$image->adult}}"></span></p>
                    <p>Satira: <span class="{{$image->spoof}}"></span></p>
                    <p>Medicina: <span class="{{$image->medical}}"></span></p>
                    <p>Violenza: <span class="{{$image->violence}}"></span></p>
                    <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                  </div>
                </div>
                @endforeach
              </div>
              @else
              <div class="carousel-inner rounded-4 shadow-lg "> 
                
                <div class="carousel-item active" data-bs-interval="2000">
                  <img src="https://picsum.photos/500" class="d-block w-100 h-100 imgCarousel " alt="...">
                </div>
                
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="https://picsum.photos/501" class="d-block w-100 h-100 imgCarousel " alt="...">
                </div>
                
                <div class="carousel-item">
                  <img src="https://picsum.photos/502" class="d-block w-100 h-100 imgCarousel" alt="...">
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
        
        <div class="col-8 col-md-4 col-sm-8 text-center">
          <div class="card-body">
            <h2 class="card-title mb-5">{{__('ui.caricatoUtente')}} <span class="colorC">{{$article_to_check->user->name}}</span></h2>
            <h3 class="card-text colorP">{{__('ui.revTito')}}</h3>
            <p class="fs-5">{{$article_to_check->title}}</p>
            <h3 class="card-text colorP">{{__('ui.cateRev')}}</h3>
            <p class="fs-5">{{$article_to_check->category->name}}</p>
            <h3 class="card-text colorP">{{__('ui.showDesc')}}</h3>
            <p class="fs-5">{{$article_to_check->description}}</p>
            <h3 class="card-text colorP">{{__('ui.showPrez')}}</h3>
            <p class="fs-5">{{$article_to_check->price}} €</p>
            <h3 class="card-text colorP">{{__('ui.showData')}}</h3>
            <p class="fs-5">{{$article_to_check->created_at->format('d/m/Y')}}</p>
            
            <div class="d-flex justify-content-center  my-5">
              <form action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn bgA btn-lg" type="submit">{{__('ui.revsi')}}</button>
              </form>
              <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn bgC btn-lg ms-2 " type="submit">{{__('ui.revno')}}</button>
              </form>

              @if(!$article_to_undo==null) 
              <form action="{{route('revisor.undo_article', ['article'=>$article_to_undo])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-danger btn-lg ms-2 " type="submit">{{__('ui.revUnn')}}</button>
              </form>
              @endif

            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  @endif
  <div class="divAltezza"></div>
  <div class="divAltezza"></div>
</x-layout>