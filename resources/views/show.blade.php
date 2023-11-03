<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 display-2 text-center bgP p-3 titleShow mt-3">
                <h1 class="display-1 colorA ">Stai guardando {{$article->title}}!</h1>
            </div>
            <div class="col-6 align-self-center mt-4">
                <h3>{{$article->title}}</h3>
                <h5>{{$article->category->name}}</h5>
                <small><i class="far fa-clock"></i> {{$article->created_at}}</small>
                <p><small>Last update: {{$article->created_at}} </small></p>
                <p>Da: {{$article->user->name}}</p>
                <p>{{$article->description}} </p>
                <p>{{$article->price}}</p>
                
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
                <img class="imgH" src="https://picsum.photos/500" alt="...">
            </div>
          
           
        </div>
    </div>
</x-layout>