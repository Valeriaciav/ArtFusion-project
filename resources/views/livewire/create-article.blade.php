<div>
    {{-- The whole world belongs to you. --}}

    <form class="form1" wire:submit.prevent="store">
       @csrf
    
       @if (session()->has('articleCreated'))
           <div class="alert alert-success text-center">
               {{ session('articleCreated') }}
           </div>
       @endif
    
       <label class="label2" for="name">Nome</label>
       <input type="text" wire:model="name" class="input2 @error('name') is-invalid @enderror">
           @error('name')
           {{$message}}
           @enderror
    
       {{-- <label class="label2" for="category">Categoria</label>
       <select type="text" id="nome" wire:model.defer="category" class="input2">
           <option value="">Seleziona categoria</option>
           @foreach($categories as $category)
           <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
       </select> --}}
    
       <label class="label2" for="price">Prezzo</label>
       <input type="number"wire:model="price"  class="input2 @error('price') is-invalid @enderror" >
           @error('price')
               {{$message}}
           @enderror
    
       <label class="label2" for="description">Descrizione</label>
       <textarea class="input2"  wire:model="description" class="input2 @error('description') is-invalid @enderror"></textarea>
           @error('description')
               {{$message}}
           @enderror
    
       <button type="submit" class="button2 d-flex justify-content-center">
           <a href="" class=" poiret">Inserisci</a>
       </button>
    </form>
</div>

