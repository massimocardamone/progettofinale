<a href="{{route('show',compact('article'))}}">
    <div class="card position-relative mycard my-3 mx-2">
        <div class="position-relative imgBox">
            <img class="cardimg img-fluid" src="{{Storage::url($article->img)}}" alt="">
            <div class="cardcategory">
                <!-- qui va il link alla pagina con tutti i prodotti della stessa categoria -->
                <p class="m-0">{{$article->genre->genre}}</p>     
            </div>
        </div>   
        <div class="cardBody m-2 mt-0"> 
            <div class="cardtitle">
                <h2>{{$article->name}}</h2>
            </div>
            <div class="cardprice">
                <h4><span><span class="price">{{$article->price}}</span> &euro;</span></h4>
                <h5>Aggiunto da: {{$article->user->name}}</h5>
            </div>
            <div class="carddescription p-1">
                <p class="fst-italic">{{$article->description}}</p>
            </div>
            <div class="carddate">
                <p> creato in data {{$article->created_at->format('d/m/y')}}</p>
            </div>
        </div>
    </div>
</a>