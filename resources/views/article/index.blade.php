<x-layout docTitle="Index" title="{{__('messages.Tutti i prodotti')}}">
    <div class="container">
        
        {{-- LISTA CATEGORIE --}}

        <x-catNav />

    </div>
    {{-- LISTA CARD --}}
    <div class="container mysection">
        <div class="row">
            @forelse ($articles as $article)
            <div class="col-12 col-sm-8 col-md-3 mx-sm-auto">
                <x-card :article="$article" animate="animate__fadeIn"/>
            </div>
            @empty
                <div class="col-12 min-vh-100">
                    <h3 class="text-center">{{__('messages.Nessun prodotto')}}</h3>
                </div>
            @endforelse 
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$articles->links()}}
        </div>
       
    </div>

</x-layout>