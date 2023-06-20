<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{
    public $name;
    public $price;
    public $description;
    public function store(){

        Article::create([
        'name'=>$this->name,
        'price'=>$this->price,
        'description'=>$this->description,]);
        $this->cleanForm();

    }
    public function cleanform(){
        $this->name = '';
        $this->price =  '';
        $this->description = '';
    }
    public function render(){
        return view('livewire.create-article');
    }
}
