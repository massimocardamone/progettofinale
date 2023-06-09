<x-layout docTitle="home" title="revisiona">

    {{-- @dd($article_to_check->all()) --}}
    <div class="container">
        <div class="row">
            @foreach ($article_to_check as $article )
            <x-card :article="$article"/>
                
            @endforeach
            <div class="col-12 col-md-3">
            </div>
        </div>
    </div>


</x-layout>