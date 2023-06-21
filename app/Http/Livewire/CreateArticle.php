<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{
    public $name;
    public $price;
    public $description;

    protected $rules = [
        'name'=>'required|min:4',
        'price'=>'required|numeric',
        'description'=>'required|min:8',
    ];

    protected $messages = [
        
        'name.min'=>'Il nome è troppo corto',
        'description.min'=>'La descrizione è troppo corta',

        

    ];

    public function store(){

        Article::create([
        'name'=>$this->name,
        'price'=>$this->price,
        'description'=>$this->description,]);

        session()->flash('articleCreated', 'Articolo inserito con successo');
        $this->cleanForm();

    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
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
