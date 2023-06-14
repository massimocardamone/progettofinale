<<<<<<< HEAD
<x-layout docTitle="Homepage" title="C o l i c a S t o r e">
  
  <div class="container mymotto d-flex justify-content-center">
    <div class="row align-items-center">
      <div class="col-12 d-flex  justify-content-center">
        <h2 class="fst-italic">Prezzi... da mal di pancia!</h2>
      </div>
=======
<x-layout docTitle="Homepage" title="C o l i c a S t o r e" animate="animate__backInDown">

  <x-number-section artNum='{{$artNum}}' userNum='{{$userNum}}'/> 

<div class="container mysezione11">
  <div class="row">
    <div class="col-12">
      <h3 class="fst-italic">{{ __('messages.I nostri prodotti')}}</h3>
    </div>
  </div>
  
  <div class="container mysezione11">
    <div class="row">
      <div class="col-12">
        <h3 class="fst-italic">I nostri nuovi prodotti!</h3>
      </div>
    </div>
  </div>
  
  <div class="container mt-1">
    <div class="row bg-danger justify-content-between">
      <div class="col-12 col-md-8 bg-warning d-flex">
        @foreach ($articles as $article)
<<<<<<< HEAD
        <div class="col-12 col-md-3">     
          <x-card :article='$article'/>      
=======
        <div class="col-12 col-md-4">     
          <x-card :article='$article' animate="animate__fadeIn"/>      
>>>>>>> 9c8b22b0bfaee47d8b07fa2b6f72e17f829c6b1c
        </div>
        @endforeach

      </div> 
      
        {{-- <div class="col-6 col-md-4 d-flex justify-content-end">
            <div class="row rigahomesezprod flex-column justify-content-around">
              <div class="col-3 d-flex colsezsx align-items-center">
                <div class="bg-primary contentcolsx">
                  <h5 class="mytext">Lorem Ipsumsjdjdjdjdjdjdjdjjdjddjdjdjdjdjjdjjdjdjjd</h5>
                </div>
              </div>
              <div class="col-3 d-flex colsezsx align-items-center">
                <h5 class="mytext">Lorem Ipsum</h5>
              </div>
              <div class="col-3 d-flex colsezsx align-items-center">
                <h5>Lorem Ipsum</h5>
              </div>
            </div>
          
        </div> --}}

    
</div>


 {{--* per inviare la candidatura del relatore --}}
 @auth 
 @if (!Auth::user()->is_revisor)
 <div class="container ">
   <div class="row justify-content-center">
     <div class="col-12 col-md-3 mysezione11 mt-5 text-center">
       <p>Colica Store</p>
       <p>vuoi lavorare con noi?</p>
       <a href="{{route('become.revisor')}}" class="btn btn-warning">clicca qui</a>
     </div>
   </div>
 </div>  
 @endif
 @endauth

</x-layout>
