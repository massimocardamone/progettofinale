<x-layout docTitle="detail" title="{{$genre->genre}}">
    
    <div class="container mysection">
        
        {{-- LISTA CATEGORIE --}}
        <div class="row justify-content-evenly py-2">
            @foreach ($genres as $items )
            <div class="col-4 col-md-2 mx-1 d-flex justify-content-center">
                <a class="btn" href="{{route('show_category', ['genre'=>$items])}}"><button class="mybtn">{{$items->genre}}</button></a>
            </div>
            @endforeach
        </div>
    </div>
    
    @if ( count($genre->articles)>0)
    <div class="container mysection">
        <div class="row">
            @foreach ($genre->articles as $single)
            <div class="col-12 col-md-3">
                <x-card :article="$single"></x-card>
            </div>
            @endforeach
            
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
