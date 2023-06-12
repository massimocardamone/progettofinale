<x-layout docTitle="Index" title="Tutti gli Articoli">
    <div class="container">
        
        {{-- LISTA CATEGORIE --}}

        <x-catNav />

    </div>
    {{-- LISTA CARD --}}
    <div class="container mysection">
        <div class="row">
            @forelse ($articles as $article)
            <div class="col-12 col-sm-8 col-md-3 mx-sm-auto">
                <x-card :article="$article"/>
            </div>
            @empty
                <div class="col-12">
                    <h3 class="text center">Nessun articolo trovato</h3>
                </div>
            @endforelse 
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$articles->links()}}
        </div>
    </div>

    {{-- script per nuovo su nuovi articoli --}}
    <script>
        let date = new Date();
        let today = date.getDate();
        let month = (date.getMonth())+1;
        let year = (date.getYear())-100;
        if (month < 10) {
            month=`0${month}`
        }
        let value = `${today}/${month}/${year}`
        let created = document.querySelectorAll('.created')
        created.forEach(element => {
        if (value == element.innerHTML) {
         element.classList.add('newArticle')
        }
        });
        
    </script>

</x-layout>