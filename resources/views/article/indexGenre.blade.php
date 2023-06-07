<x-layout docTitle="detail" title="{{$genre->genre}}">
<div class="row justify-content-evenly py-2" >
        @foreach ($genres as $items )
        <div class="col mx-1 d-flex">
            <a class="btn" href="{{route('show_category', ['genre'=>$items])}}">{{$items->genre}}</a>
        </div>
        @endforeach
    </div>

    @if ( count($genre->articles)>0)
    <div class="container-fluid">
        <div class="row">
            @foreach ($genre->articles as $single)
                <div class="col-12 col-md-3">
                    <x-card :article="$single"></x-card>
                </div>
            @endforeach

        </div>
    </div>
    @else
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-3">
                <h1>nessun prodotto</h1> 

            </div>
        </div>
    </div>
    @endif


</x-layout>
