<x-layout docTitle="Homepage" title="Homepage">
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-12 col-md-4">     
          <x-card :article='$article'/>      
        </div>
        @endforeach
    </div>
</div>











</x-layout>