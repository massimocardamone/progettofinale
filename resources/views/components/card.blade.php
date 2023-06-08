<a href="{{route('show',compact('article'))}}">
    <div class="card mycard my-3 mx-2">
        <div class="position-relative imgBox">
            <img class="cardimg img-fluid" src="{{Storage::url($article->img)}}" alt="">
            <div class="cardcategory">
                <!-- qui va il link alla pagina con tutti i prodotti della stessa categoria -->
                <p class="m-0">{{$article->genre->genre}}</p>     
            </div>
        </div>   
        <div class="cardBody m-2 mt-0"> 
            <div class="cardtitle mt-2">
                <h3>{{$article->name}}</h3>
            </div>
            <div class="cardprice">
                <h4>{{$article->price}} &euro;</h4>
                <h4>Aggiunto da: {{$article->user->name}}</h4>
                <h4>{{$article->created_at->format('d/m/y')}}</h4>
            </div>
            <div class="carddescription mt-1">
                <p class="fst-italic">{{$article->description}}</p>
            </div>
        </div>
    </div>
</a>