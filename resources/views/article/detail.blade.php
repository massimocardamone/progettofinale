<x-layout docTitle="detail" title="{{$article->name}}">
     
<div class="container-fluid">
    <div class="row justify-content-center ">
        <div class=" col-12 col-md-6 ">
            <img class="img-fluid" src="{{Storage::url($article->img)}}" alt="">
        </div>
        <div class="col-12 col-md-6  d-flex align-items-center justify-content-center ">
            <ul class="">
                <li class="list-group text-light">Nome: {{$article->name}}</li>
                <li class="list-group text-light">Prezzo:€{{$article->price}}</li>
                <li class="list-group text-light">Categoria:{{$article->genre->genre}}</li>
                <li class="list-group text-light">Descrizione{{$article->description}}</li>
            </ul>
        </div>
        
    </div>
</div>
</x-layout>