<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{
    public $title;
    public $description;
    public $price;
    public $categories = [];

    public function store(){
        $article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        
        $article->categories()->attach($this->categories);
    }

    public function render()
    {
        return view('livewire.create-form');
    }

    
}
