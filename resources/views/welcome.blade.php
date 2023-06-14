<x-layout docTitle="Homepage" title="C o l i c a S t o r e" animate="animate__backInDown">

  {{-- <x-number-section artNum='{{$artNum}}' userNum='{{$userNum}}'/>  --}}

<div class="container mysezione11">
  <div class="row">
    <div class="col-12">
      <h3 class="fst-italic">I nostri nuovi prodotti!</h3>
    </div>
  </div>
  
  <div class="container mt-1">
    <div class="row bg-danger justify-content-between">
      <div class="col-12 col-md-8 bg-warning d-flex"> 
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($articles as $article)
                        <div class="swiper-slide">          
                              <x-card :article='$article'/>     
                        </div> 
                    @endforeach
                </div>
            </div>
        </div> 
        <div class="col-12 col-md-4 bg-primary d-flex align-items-center">
          <x-number-section artNum='{{$artNum}}' userNum='{{$userNum}}'/></div>             
      </div>     
      </div>
  </div>
  
  
  
  
  {{--* per inviare la candidatura del relatore --}}
  @auth 
  @if (!Auth::user()->is_revisor)
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-4 d-flex justify-content-end col-md-12 mysection13 mt-1 mb-3 text-center">
        <p>Colica Store</p>
        <p>vuoi lavorare con noi?</p>
        <a href="{{route('become.revisor')}}" class="btn mybtn">clicca qui</a>
      </div>
    </div>
  </div>  
  @endif
  @endauth
  
</x-layout>
