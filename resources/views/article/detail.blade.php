<x-layout docTitle="detail" :title="$article->name">
    
    <div class="container mt-3">
        <div class="row justify-content-between">
            <div class="col-12 col-md-2">
                <a href="{{route('home')}}" class="btn mybtn my-3">{{__('messages.Torna indietro')}}</a> 
            </div>
            <div class=" col-12 col-md-4 coldetdx d-flex align-items-center">
                @if (count($article->images()->get()) <= 1)
                <div class="coldetdxd ">
                    <img class="img-fluid imgdet" src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : "/media/default.jpg" }}" alt="immagini">
                </div>     
                @else
                <div class="coldetdxd">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($article->images()->get() as $item)
                            <div class="swiper-slide">
                                <img src="{{$item->getUrl(400,300)}}" class="d-block"/>
                            </div>  
                             @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div> 
                </div>
                @endif           
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center coldetsx ">
                <div class="">
                    <ul class="">  
                        <li class="list-group d-flex coldetli">
                            <h4>{{__('messages.Nome')}}: <span class="titleText">{{$article->name}}</span></h4>
                        </li>
                        <li class="list-group coldetli"> <h4><span>{{__('messages.Prezzo')}}: € <span class="priceDet">{{$article->price}}</span></span></h4></li>
                        <li class="list-group coldetli"><h4>{{__('messages.Categoria')}}: {{$article->genre->genre}}</h4></li>
                        
                        <!-- Bottone per aprire la modale -->
                        <button class="coldetlibtn" onclick="openModal()"><h3>{{__('messages.Leggi la descrizione')}}!</h3></button>
                        
                        <!-- La modale -->
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <h2>{{$article->name}}</h2>
                                <p>{{$article->description}}</p>
                            </div>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>   
        </div>      
    </div>
    {{-- <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-6 coldetsx">
                <div class="coldetdxd ">
                    
                    <img class="imgdet img-fluid w-100" src="https://picsum.photos/400/300" alt="">
                </div>            
            </div>
            
            <div class="col-12 col-md-6 coldetdx">
                <div class="coldetdxd ">
                  
                    <img class="imgdet img-fluid w-100" src="https://picsum.photos/400/300" alt="">
                </div>            
            </div>
        </div>    
    </div>                --}}

</x-layout>

{{-- script modale --}}
<script>
    // Funzione per aprire la modale
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }
    
    // Funzione per chiudere la modale
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    
    // Chiudi la modale cliccando all'esterno del contenuto
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal")) {
            closeModal();
        }
    }
</script>

<script>
    let priceDet = document.querySelector('.priceDet');
    let priceDetValue = parseFloat(priceDet.innerHTML);
    priceDet.innerHTML= priceDetValue.toFixed(2);
</script>