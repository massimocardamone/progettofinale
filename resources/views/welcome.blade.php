<x-layout docTitle="Homepage" title="C o l i c a S t o r e" animate="animate__backInDown">

  <div class="container mymotto d-flex justify-content-center">
    <div class="row align-items-center">
      <div class="col-12 d-flex  justify-content-center">
        <h2 class="fst-italic">{{ __('messages.sottotitolo')}}</h2>
      </div>
    </div>
  </div>

  <div class="container mysezione11">
    <div class="row">
      <div class="col-12">
        <h3 class="fst-italic">{{ __('messages.I nostri prodotti')}}</h3>
      </div>
    </div>
  </div>

  <div class="container mt-1 mb-1">
    <div class="row justify-content-between">
      <div class="col-12 col-md-8 d-flex mysectionx">
        <div class="swiper mySwiper2 swiper2">
          <div class="swiper-wrapper swiper-wrapper2">
            @foreach ($articles as $article)
            <div class="swiper-slide d-flex justify-content-center swiper-slide2">
              <x-card :article='$article'/> 
            </div>
            @endforeach 
          </div>
        </div>        
      </div>
      <div class="col-12 col-md-4 d-flex align-items-center">
        <x-number-section artNum='{{$artNum}}' userNum='{{$userNum}}'/></div>             
    </div>
  </div>
  
 
  {{--* per inviare la candidatura del relatore --}}
  @auth 
  @if (!Auth::user()->is_revisor)
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 d-flex justify-content-start col-md-12 mysection13 mt-1 mb-3 p-3 align-items-center">        
        <h2 class="violet-text pe-2">{{__('messages.Vuoi lavorare con noi?')}}?</h2>
        <a href="{{route('request.revisor')}}" class="btn mybtn">{{__('messages.clicca qui')}}</a>
      </div>
    </div>
  </div>
  @endif
  @endauth

</x-layout>