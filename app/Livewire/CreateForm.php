<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $categories;

    protected $rules=[
        'title' => "required|min:5",
        'description'=> "required|min:10",
        'price'=> "required|numeric"
    ];


    protected $messages=[
        'title.required'=>"Il titolo è obbligatorio",
        'title.min'=>"Il titolo deve avere almeno cinque caratteri",
        'description.required'=>"La descrizione è obbligatoria",
        'description.min'=>"La descrizione deve avere almeno dieci caratteri",
        'price.required'=>"Il prezzo è obbligatorio",
        'price.numeric'=>"Il prezzo deve essere un numero",
    ];
    
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
       return redirect(route('welcome'))->with('message', 'Articolo caricato correttamente!');
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
