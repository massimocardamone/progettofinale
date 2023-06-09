<x-layout docTitle="detail" title="{{$genre->genre}}">
    
    <div class="container mysection">
        
        {{-- LISTA CATEGORIE --}}

        <x-catNav />

    </div>
    
    @if ( count($articles)>0)
    <div class="container mysection">
        <div class="row">
            @foreach ($articles as $single)
            <div class="col-12 col-md-3">
                <x-card :article="$single"></x-card>
            </div>
            @endforeach 
            <div class="col-12 d-flex justify-content-center mt-5">
                {{$articles->links()}}
            </div>
        </div>
    </div>
    @else
    <div class="container my-5 height-1">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Nessun Articolo per la categoria</h2> 
            </div>
        </div>
    </div>
    @endif
    
    
</x-layout>
