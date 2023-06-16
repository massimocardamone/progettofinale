<x-layout docTitle="home"
    title="{{ $article_to_check ? __('messages.Articolo da revisionare') : __('messages.non ci sono articoli') }}">
    {{-- messaggi di risposta --}}

    <div class="container">
        <div class="row ">
            <div class="col-12">
                @if (session('messageRev'))
                    <div class="alert alert-success text-center">
                        <h3 class="lead">{{ session('messageRev') }}</h3>
                        @if ($article_to_check)
                            <div class="w-100 d-flex justify-content-center">
                                <form method="POST"
                                    action="{{ route('revisor.old', ['article' => $article_to_check]) }}">
                                    @method('PATCH')
                                    @csrf
                                    <button class="btn mybtn"> {{ __('messages.annulla') }} </button>
                                </form>
                            </div>
                        @else
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 d-flex  justify-content-center">
                                        <form method="POST" action="{{ route('revisor.oldArticle') }}">
                                            @method('PATCH')
                                            @csrf
                                            <button class="btn mybtn"> {{ __('messages.annulla') }} </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if ($article_to_check)
        <div class="container mt-3">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center coldetsx">
                    <div class="coldetsxd">
                        <ul>
                            <li class="list-group text-light">
                                <h4><span class="titleText">{{ $article_to_check->name }}</span></h4>
                            </li>
                            <li class="list-group text-light">{{ __('messages.Prezzo') }}:
                                €{{ $article_to_check->price }}</li>
                            <li class="list-group text-light">{{ __('messages.Categoria') }}:
                                {{ $article_to_check->genre->genre }}</li>
                            <li class="list-group text-light">{{ __('messages.Descrizione') }}:
                                {{ $article_to_check->description }}</li>
                            {{-- <a href="{{ route('home') }}" class="btn mybtn my-3">Torna Indietro</a> --}}
                        </ul>
                    </div>
                </div>

                <div class=" col-12 col-md-6 coldetdx">
                    @if (count($article_to_check->images()->get()) <= 1)
                        <div class="coldetdxd ">
                            <img class="imgdet img-fluid w-100"
                                src="{{ !$article_to_check->images()->get()->isEmpty()? $article_to_check->images()->first()->getUrl(400, 300): '/media/default.jpg' }}"
                                alt="">
                        </div>
                    @else
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">
                                @foreach ($article_to_check->images()->get() as $item)
                                    <div class="swiper-slide">
                                        <img src="{{ $item->getUrl(400, 300) }}" class="d-block" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next" id="coloraAcc"></div>
                            <div class="swiper-button-prev" id="coloraAcc"></div>
                        </div>
                    @endif
                    <div class="container mt-3">
                        <div class="row coldetsxd justify-content-evenly">
                            @foreach ($article_to_check->images()->get() as $image)
                                <div class="col-12 col-md-3 ">
                                    <div class="card-body">
                                        <h5>revisione immagini</h5>
                                        <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                        <p>satira: <span class="{{ $image->spoof }}"></span></p>
                                        <p>medicina: <span class="{{ $image->medical }}"></span></p>
                                        <p>violenza: <span class="{{ $image->violence }}"></span></p>
                                        <p>contenuto ammiccante: <span class="{{ $image->racy }}"></span></p>
                                    </div>
                                </div> 
                                @if ($image->labels)
                                <div class="col-12 col-md-3 ">
                                    <div class="card-body">
                                        <h5>labels</h5>
                                        <ul>
                                            @foreach ($image->labels as $label )
                                                <li class=" text-light">{{$label}}</li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div> 
                                    
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <form method="POST" action="{{ route('revisor.accept', ['article' => $article_to_check]) }}">
                            @method('PATCH')
                            @csrf
                            <button class="btn mybtn">{{ __('messages.accetta') }}</button>
                        </form>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <form method="POST" action="{{ route('revisor.refuse', ['article' => $article_to_check]) }}">
                            @method('PATCH')
                            @csrf
                            <button class="btn mybtn">{{ __('messages.rifiuta') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container vh-60">
            <div class="row ">
                <div class="col-12 d-flex mt-5 justify-content-center">
                    <a class="btn mybtn" href="{{ route('home') }}">{{ __('messages.Torna alla Home') }}</a>
                </div>
            </div>
        </div>
    @endif

</x-layout>
