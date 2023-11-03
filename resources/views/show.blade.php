<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 display-2 text-center p-3 titleShow mt-3">
                <h1 class="display-1 colorA ">Stai guardando {{$article->title}}!</h1>
            </div>
            <div class="container mb-5">
                <div class="row justify-content-around bgE rounded-4">
                    
                    <div class="ms-1 col-5 align-self-center mt-4">
                        <h3>{{$article->title}}</h3>
                        <h5>{{$article->category->name}}</h5>
                        <small><i class="far fa-clock"></i> {{$article->created_at}}</small>
                        <p><small>Caricato il: {{$article->created_at->format('d/m/Y')}} </small></p>
                        <p>Da: {{$article->user->name}}</p>
                        <h5 class="mt-2 colorD fw-bold">Descrizione:</h5>
                        <p>{{$article->description}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quam inventore, illum sapiente a debitis delectus sed neque aspernatur provident illo, cum, minima fugiat. Dolore voluptates mollitia voluptate inventore asperiores!</p>
                        <h5 class="mt-2 colorD  fw-bold">Prezzo:</h5>
                        <p>{{$article->price}} €</p>
                        
                        {{-- @if(Auth::user() && $movie->user->id == Auth::user()->id)
                            <div class="my-3 bgP col-6 p-3 bgButtonsShow">
                                <h5>Dear {{$movie->user->name}} do you want to:</h5>
                                <ul>
                                    <li>
                                        <p class="mb-2 mt-3 ">modify your review?</p>
                                        <a href="{{route('article_edit',compact('movie'))}}"class="btn bgA btn-circle btn-circle-xl mt-0 d-flex align-items-center justify-content-center fs-3"><i class="fa-solid fa-pencil colorW"></i></a>
                                    </li>
                                    <li>
                                        <p class="mb-2 mt-3">delete your review?</p>
                                        <form method="POST" onclick="return confirm('Are you sure?')" action="{{route('article_destroy',compact('movie'))}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-circle btn-circle-xl mt-0 fs-3"><i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endif --}}
                        </div>
                        
                        <div class="col-6 my-5">
                            <img class="imgH shadow-lg rounded-4" src="https://picsum.photos/500" alt="...">
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </x-layout>