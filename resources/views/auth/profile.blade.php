<x-layout>
  <div class="container-fluid pt-5 h-profile bgS bgRepeat m-0 d-flex align-items-end">
    <div class="row pt-5">
      <div class="col-12">
        <h1 class="colorD text-center">Bentornato {{Auth::user()->name}}</h1>
      </div>
    </div>
  </div>
  
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card mb-3 align-self-start" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-5 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="Avatar" class="img-fluid my-5 mx-auto d-block" style="width: 80px;">
                <h5>{{Auth::user()->name}}</h5>
                @if (!Auth::user()->is_revisor)
                <p>Utente</p>
                @else
                <p>Revisore</p>
                @endif
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-12 col-md-7">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-md-6">
                      <h6>Email</h6>
                      <p class="text-muted">{{Auth::user()->email}}</p>
                    </div>
                    <div class="col-md-6">
                      <h6>Nome</h6>
                      <p class="text-muted">{{Auth::user()->name}}</p>
                    </div>
                  </div>
                  <h6>Articoli pubblicati</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-md-6">
                      <h6>Recent</h6>
                      <p class="text-muted">Lorem ipsum</p>
                    </div>
                    <div class="col-md-6">
                      <h6>Most Viewed</h6>
                      <p class="text-muted">Dolor sit amet</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-start">
                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6"> 
          <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-sm-6 mb-4">
              <div class="card h-100 shadow-lg">
                <a class="card-img-tiles" href="#" data-abc="true">
                  <div class="inner">
                    <div class="main-img">
                      <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300, 300) : 'https://picsum.photos/300'}}" alt="Category" class="img-fluid">
                    </div>
                  </div>
                </a>
                <div class="card-body text-center">
                  <h4 class="card-title">{{$article->title}}</h4>
                  <h5 class="card-title colorC">{{$article->category->name}}</h5>
                  <p class="text-muted">{{$article->description}}...</p>
                  <p class="text-muted">{{$article->price}} €</p>
                  <a class="btn bgA" href="{{route('article_show', compact('article'))}}">{{__('ui.weDett')}}</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
      <div class="col-12 d-flex justify-content-center"> 
        {{$articles->links()}}
      </div>
    </div>
  </section>
</x-layout>