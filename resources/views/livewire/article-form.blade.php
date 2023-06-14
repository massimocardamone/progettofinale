<form wire:submit.prevent="store" enctype="multipart/form-data">
    {{-- @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif --}}

    <div class="mb-3">
        <label for="name" class="form-label">{{__('messages.Nome prodotto')}}</label>
        <input type="text" class="form-control myinput @error('name')
        is-invalid @enderror"wire:model="name"
            id="name" placeholder="Nome..">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">{{__('messages.Imnagine')}}</label>
        <input wire:model='temporary_images' type="file" class="form-control @error('temporary_images')
        @enderror" multiple id="image" name='images' placeholder="img">
        @error('temporary_images.*')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Previsione :</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                    @foreach ($images as $key =>$image )
                        <div class="col my-3">
                            <div class=" img-preview mx-auto shadow rounded" style= "background-image: url({{$image->temporaryUrl()}}); width:50px;height:50px;">
                            </div>
                            <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea wire:model="description" id="description"
            class="form-control myinput @error('description') is-invalid @enderror" cols="30" rows="10">
        </textarea>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" step="0.01" min="0" wire:model="price"
            class="form-control myinput @error('price')
        is-invalid
      @enderror" id="price">
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3 d-flex">
        <div class="container">
            <div class="row">
                @foreach ($genres as $genre)
                    <div class="col-12 col-sm-4 col-md-4 ">
                        <span class="form-check mx-2">
                            <input
                                class="form-check-input @error('genre_id')
                            is-invalid
                            @enderror"
                                type="radio" value="{{ $genre->id }}" wire:model="genre_id"
                                id="{{ $genre->id }}">
                            <label for="{{ $genre->id }}" class="form-check-label">{{ $genre->genre }}</label>
                        </span>
                    </div>
                @endforeach
                 @error('genre_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror

            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-success">Aggiungi</button>
    </div>


</form>
