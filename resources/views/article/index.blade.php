<x-layout docTitle="Index" title="Tutti gli Articoli">
    <div class="container">
        
        {{-- LISTA CATEGORIE --}}
        <div class="row justify-content-evenly py-2 mysection">
            @foreach ($genres as $genre )
            <div class="col-4 col-md-2 mx-1 d-flex justify-content-center">
                <a class="btn" href="{{route('show_category', compact('genre', 'genres'))}}">
                    
                    <button class="mybtn">{{$genre->genre}}</button>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mysection">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article"/>
            </div>
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$articles->links()}}
        </div>
    </div>
    
</x-layout>