<x-layout docTitle="Create" title="{{__('messages.CREA IL TUO PRODOTTO')}}">
  <div class="container">
    <div class="row myformdiv justify-content-center">
      <div class="col-12 col-sm-10 col-md-7">
        @livewire('article-form', compact('genres'))
      </div>           
    </div>
  </div>
</x-layout>

