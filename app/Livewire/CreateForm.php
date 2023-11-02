<?php

namespace App\Livewire;

use Livewire\Component;

class CreateForm extends Component
{
    public $title;
    public $description;
    public $category;
    public $price;

    public function render()
    {
        return view('livewire.create-form');
    }
}
