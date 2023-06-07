<x-layout docTitle="detail" title="{{$article->name}}">
     
<div class="container mt-3">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center coldetsx">
            <div class="coldetsxd">
                <ul class="">  
                    <li class="list-group text-light">Nome: {{$article->name}}</li>
                    <li class="list-group text-light">Prezzo: €{{$article->price}}</li>
                    <li class="list-group text-light">Categoria: {{$article->genre->genre}}</li>
                    <li class="list-group text-light">Descrizione: {{$article->description}}</li>
                    <a href="{{route('home')}}" class="btn mybtn my-3">torna indietro</a>
                </ul>
            </div>
            
        </div>
        <div class=" col-12 col-md-6 coldetdx">
            <div class="coldetdxd ">
                <img class="img-fluid imgdet" src="{{Storage::url($article->img)}}" alt="">
            </div>            
        </div>
        
        <div class="col-12 col-md-6 coldetsx">
            <div class="coldetsxd ">
                <img class="img-fluid imgdet" src="{{Storage::url($article->img)}}" alt="">
            </div>            
        </div>

        <div class="col-12 col-md-6 coldetdx">
            <div class="coldetdxd ">
                <img class="img-fluid imgdet" src="{{Storage::url($article->img)}}" alt="">
            </div>            
        </div>        
    </div>    
</div>
</x-layout>