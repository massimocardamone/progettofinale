<form wire:submit.prevent="store">
    
    <span class="form-check mx-2">
        {{-- <i class="fa-solid fa-star"></i> --}}
        <input
            class="form-check-input @error('vote')
        is-invalid
        @enderror"
            type="radio" value="1" wire:model="vote"
            id="voto1">
        <label for="voto1" class="form-check-label">1</label>
    </span>

    <span class="form-check mx-2">
        <input
            class="form-check-input @error('vote')
        is-invalid
        @enderror"
            type="radio" value="2" wire:model="vote"
            id="voto2">
        <label for="voto2" class="form-check-label">2</label>
    </span>

    <span class="form-check mx-2">
        <input
            class="form-check-input @error('vote')
        is-invalid
        @enderror"
            type="radio" value="3" wire:model="vote"
            id="voto3">
        <label for="voto3" class="form-check-label">3</label>
    </span>

    <span class="form-check mx-2">
        <input
            class="form-check-input @error('vote')
        is-invalid
        @enderror"
            type="radio" value="4" wire:model="vote"
            id="voto4">
        <label for="voto4" class="form-check-label">4</label>
    </span>

    <span class="form-check mx-2">
        <input
            class="form-check-input @error('vote')
        is-invalid
        @enderror"
            type="radio" value="5" wire:model="vote"
            id="voto5">
        <label for="voto5" class="form-check-label">5</label>
    </span>
    
    <p class="d-none" value="{{$article_id}}" wire:model="article_id"></p>
    <div class="d-flex justify-content-center mb-3">
        <button type="submit"  class="btn btn-success">Vota</button>
    </div>
</form>