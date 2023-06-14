<x-layout docTitle="Homepage" title="C o l i c a S t o r e" animate="animate__backInDown">

  <x-number-section artNum='{{$artNum}}' userNum='{{$userNum}}'/> 

<div class="container mysezione11">
  <div class="row">
    <div class="col-12">
      <h3 class="fst-italic">I nostri nuovi prodotti!</h3>
    </div>
  </div>
</div>
<div class="container mt-1">
    <div class="row">
      
        @foreach ($articles as $article)
        <div class="col-12 col-md-4">     
          <x-card :article='$article' animate="animate__fadeIn"/>      
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
