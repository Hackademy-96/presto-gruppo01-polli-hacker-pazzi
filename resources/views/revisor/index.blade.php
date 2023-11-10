<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <h1 class="text-center">
                    @if($article_to_check)
                    {{__('ui.rev1')}}
                    @else
                    {{__('ui.rev2')}}
                    @endif

                </h1>
            </div>
        </div>
    </div>
    
    @if ($article_to_check)
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8"></div>
            <div class="card  " style="width: 40rem;">
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
                    <button class="btn bgA btn-lg" type="submit">{{__('ui.revsi')}}</button>
                </form>
            </div>
            
            <div class="col-6">
                <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn bgC btn-lg" type="submit">{{__('ui.revno')}}</button>
                </form>

            </div>
        </div> 
    </div>
    @endif
    
</x-layout>