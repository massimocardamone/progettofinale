<x-layout docTitle="Index" title="lista  prodotti">

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