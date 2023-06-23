<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    public $name;
    public $price;
    public $description;
    public $category;

    protected $rules = [
        'name'=>'required|min:4',
        'price'=>'required',
        'description'=>'required|min:8',
        'category'=>'required|min:8',
    ];

    protected $messages = [
        
        'name.min'=>'Il nome è troppo corto',
        'description.min'=>'La descrizione è troppo corta',

        

    ];

    public function store(){

        $category = Category::find($this->category);

        $article = $category->articles()->create([
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->description,
        ]);
        
        Auth::user()->articles()->save($article);
       

        $this->cleanForm();
        session()->flash('articleCreated', 'Articolo inserito con successo');

    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function cleanform(){
        $this->name = '';
        $this->description = '';
        $this->price =  '';
        $this->category = '';
        
    }
    public function render(){
        return view('livewire.create-article');
    }
}
