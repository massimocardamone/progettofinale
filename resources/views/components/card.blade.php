<a href="{{route('show')}}">
    <div class="card mycard my-5 mx-2">
        <div class="position-relative imgBox">
            <img class="cardimg img-fluid" src="https://picsum.photos/id/237/287/300" alt="">
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
                <h4>{{$article->created_at}}</h4>
            </div>
            <div class="carddescription mt-1">
                <p>{{$article->description}}</p>
            </div>
        </div>
    </div>
</a>