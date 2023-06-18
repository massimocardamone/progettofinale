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
                        </ul>
                    </div>
                </div>

                <div class=" col-12 col-md-6 coldetdx">
                    @if (count($article_to_check->images()->get()) == 1)
                        <div class="coldetdxd ">
                            <div class="card">
                                <img src="{{!$article_to_check->images()->get()->isEmpty()? $article_to_check->images()->first()->getUrl(400, 300): '/media/default.jpg' }}" class="d-block" />
                                <div class="card-body bgMain">
                                    <div class="d-flex align-items-center">
                                        <div class="pe-3"> 
                                            <h5>{{__('messages.Revisione immagini')}}</h5>
                                            <ul>
                                                <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Adulti')}}:</span><span class="{{ $article_to_check->images()->first()->adult}}"></span></li>
                                                <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Satira')}}:</span><span class="{{ $article_to_check->images()->first()->spoof}}"></span></li>
                                                <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Medicina')}}:</span><span class="{{ $article_to_check->images()->first()->medical}}"></span></li>
                                                <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Violenza')}}:</span><span class="{{ $article_to_check->images()->first()->violence}}"></span></li>
                                                <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Razzismo')}}:</span><span class="{{ $article_to_check->images()->first()->racy}}"></span></li>
                                            </ul>
                                        </div>
                                        <div class="borderL ps-2">
                                            <h5>{{__('messages.ettichette')}}</h5>
                                            <ul>
                                                @foreach ($article_to_check->images()->first()->labels as $label )
                                                <li class="colorAcc">{{$label}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                        </div>
                    @elseif(count($article_to_check->images()->get()) > 1)
                        <div class="swiper mySwiper hContent">
                            <div class="swiper-wrapper">
                                @foreach ($article_to_check->images()->get() as $item)
                                    <div class="swiper-slide">
                                        <div class="card">
                                        <img src="{{ $item->getUrl(400, 300) }}" class="d-block" />
                                            <div class="card-body bgMain">
                                                <div class="d-flex align-items-center">
                                                    <div class="pe-3"> 
                                                        <h5>Revisione immagini</h5>
                                                        <ul>
                                                            <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Adulti')}}:</span><span class="{{ $article_to_check->images()->first()->adult}}"></span></li>
                                                            <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Satira')}}:</span><span class="{{ $article_to_check->images()->first()->spoof}}"></span></li>
                                                            <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Medicina')}}:</span><span class="{{ $article_to_check->images()->first()->medical}}"></span></li>
                                                            <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Violenza')}}:</span><span class="{{ $article_to_check->images()->first()->violence}}"></span></li>
                                                            <li class="colorAcc"><span class="me-2 wMe colorAcc">{{__('messages.Razzismo')}}:</span><span class="{{ $article_to_check->images()->first()->racy}}"></span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="borderL ps-2">
                                                        <h5>{{__('messages.ettichette')}}</h5>
                                                        <ul>
                                                            @foreach ($item->labels as $label )
                                                                <li class="colorAcc">{{$label}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>          
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination mt-2"></div>
                            <div class="swiper-button-next" id="coloraAcc"></div>
                            <div class="swiper-button-prev" id="coloraAcc"></div>
                        </div>
                        @elseif(count($article_to_check->images()->get()) == 0)
                        <div class="coldetdxd ">
                            <div class="card">
                            <img src="{{!$article_to_check->images()->get()->isEmpty()? $article_to_check->images()->first()->getUrl(400, 300): '/media/default.jpg' }}" class="d-block" />
                            </div>
                        </div>
                    @endif
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
        <div class="container ">
            <div class="row vh-60 ">
                <div class="col-12 d-flex mt-5 justify-content-center">
                    <a class="btn mybtn" href="{{ route('home') }}">{{ __('messages.Torna alla Home') }}</a>
                </div>
            </div>
        </div>
    @endif

</x-layout>
