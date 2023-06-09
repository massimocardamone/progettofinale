<x-layout docTitle="Index" title="Tutti gli Articoli">
    <div class="container">
        
        {{-- LISTA CATEGORIE --}}

        <x-catNav />

    </div>
    {{-- LISTA CARD --}}
    <div class="container mysection">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-sm-8 col-md-3 mx-sm-auto">
                <x-card :article="$article"/>
            </div>
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$articles->links()}}
        </div>
    </div>
</x-layout>