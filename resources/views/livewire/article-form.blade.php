<form  wire:submit.prevent="store" enctype="multipart/form-data">
    
    @if (session('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
    @endif

    <div class="mb-3">
      <label for="name" class="form-label">Nome Prodotto </label>
      <input type="text" class="form-control" wire:model="name" id="name" >
    </div>

    {{-- <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="file" class="form-control" id="image" name="img">
      </div> --}}

    <div class="mb-3">
        <label for="description" >Descrizione</label>
        <textarea wire:model="description" id="description" class="form-control" cols="30" rows="10" ></textarea>
      </div>


      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" step="0.01" wire:model="price" class="form-control" id="price">
      </div>

      <div class="mb-3 d-flex">
        @foreach ($genres as $genre)
        <div class="form-check mx-2">
          <input class="form-check-input" type="radio" value="{{$genre->id}}" wire:model="genre_id" id="flexCheckDefault">
          <label for="category" class="form-check-label">{{$genre->genre}}</label>
        </div> 
        @endforeach
       
        
      </div>
   
    <div class="d-flex justify-content-center mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
 
    
  </form>
