<x-layout docTitle="home" title="{{ $article_to_check ? 'Articolo da revisionare' : 'non ci sono articoli' }}">
    @if (session('messageRev'))
        <div class="alert alert-success text-center">
            <h3 class="lead">{{ session('messageRev') }}</h3>
            @if ($article_to_check)
                <div class="w-100 d-flex justify-content-center">
                    <form method="POST" action="{{ route('revisor.old', ['article' => $article_to_check]) }}">
                        @method('PATCH')
                        @csrf
                        <button class="btn mybtn"> Annulla </button>
                    </form>
                </div>
            @else
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <form method="POST" action="{{ route('revisor.oldArticle') }}">
                                @method('PATCH')
                                @csrf
                                <button class="btn mybtn"> Annulla </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endif

    @if ($article_to_check)
        <div class="container mt-3">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center coldetsx">
                    <div class="coldetsxd">
                        <ul class="">
                            <li class="list-group text-light">Nome: {{ $article_to_check->name }}</li>
                            <li class="list-group text-light">Prezzo: €{{ $article_to_check->price }}</li>
                            <li class="list-group text-light">Categoria: {{ $article_to_check->genre->genre }}</li>
                            <li class="list-group text-light">Descrizione: {{ $article_to_check->description }}</li>
                            <a href="{{ route('home') }}" class="btn mybtn my-3">Torna Indietro</a>
                        </ul>
                    </div>
                </div>
                <div class=" col-12 col-md-6 coldetdx">
                    <div class="coldetdxd ">
                        <img class="img-fluid imgdet" src="{{ Storage::url($article_to_check->img) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <form method="POST" action="{{ route('revisor.accept', ['article' => $article_to_check]) }}">
                            @method('PATCH')
                            @csrf
                            <button class="btn mybtn">Accetta</button>
                        </form>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <form method="POST" action="{{ route('revisor.refuse', ['article' => $article_to_check]) }}">
                            @method('PATCH')
                            @csrf
                            <button class="btn mybtn">Rifiuta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="vh-60"></div>
    @endif


</x-layout>
