<x-layout docTitle="Homepage" title="Homepage">



<div class="container mysezione11">
  <div class="row">
    <div class="col-12">
      <h3>I nostri nuovi prodotti!</h3>
    </div>
  </div>
</div>
<div class="container mt-1">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-6 col-md-4">     
          <x-card :article='$article'/>      
        </div>
        @endforeach
        <div class="col-6 col-md-4 d-flex justify-content-end">
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
          
        </div>
    </div>
</div>

</x-layout>