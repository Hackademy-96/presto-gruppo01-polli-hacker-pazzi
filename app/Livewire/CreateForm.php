<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;
    
    public $image;
    public $images = [];
    public $temporary_images;
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $categories;

    protected $rules=[
        'title' => "required|min:5",
        'description'=> "required|min:10",
        'price'=> "required|numeric",
        'images.*'=>"image|max:1024",
        'temporary_images.*'=>"image|max:1024"
    ];


    protected $messages=[
        'title.required'=>"Il titolo è obbligatorio",
        'title.min'=>"Il titolo deve avere almeno cinque caratteri",
        'description.required'=>"La descrizione è obbligatoria",
        'description.min'=>"La descrizione deve avere almeno dieci caratteri",
        'price.required'=>"Il prezzo è obbligatorio",
        'price.numeric'=>"Il prezzo deve essere un numero",
        'temporary_images.required'=>"L'immagine è richiesta",
        'temporary_images.*.image'=>"I file devono essere immagini!",
        'temporary_images.*.max'=>"L'immagine deve essere massimo di 1mb",
        'images.image'=>"L'immagine dev'essere un immagine",
        'images.max'=>"L'immagine dev'essere di 1mb",


    ];

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image'
        ])) {
            foreach($this->temporary_images as $image){
                $this->image[]= $image;
            }
        }
    }

    
    public function updated($property){
        $this->validateOnly($property);
    }

    public function store(){
        // $article = Article::create([
        //     'title' => $this->title,
        //     'description' => $this->description,
        //     'price' => $this->price,
        //     'categories'=> $this->category_id,

        // ]);
        $article = Category::find($this->category_id)->articles()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::user()->id,
        ]);
        $this->reset();
       return redirect(route('welcome'))->with('message', "Articolo inviato! Verrà revisionato a breve!");
    }

    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
    }

    public function render()
    {
        return view('livewire.create-form');
    }

    
}
