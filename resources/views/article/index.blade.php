<x-layout docTitle="Index" title="lista  prodotti">
<div class="container-fluid">

{{-- LISTA CATEGORIE --}}
    <div class="row bg-warning justify-content-evenly py-2" style="height:3rem">
        @foreach ($genres as $genre )
        <div class="col mx-1 d-flex">
            <a class="btn" href="{{route('show_category', compact('genre', 'genres'))}}">{{$genre->genre}}</a>
        </div>
        @endforeach
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        @foreach ($articles as $article)
<div class="col-12 col-md-3">
    <x-card :article="$article"/>
</div>
@endforeach
    </div>
</div>

</x-layout>