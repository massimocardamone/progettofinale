<x-layout docTitle="Domanda Revisor" title="Lavora con noi">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7">
            <div>
                <h3 class="marginStart mysection p-3"> Nome: {{Auth::user()->name}}</h3>
                <h3 class="marginStart mysection p-3"> Email: {{Auth::user()->email}}</h3>
            </div>
            <div class="mysection p-3">
                <form action="{{route('become.revisor')}}" method="POST">
                    @csrf
                    <label for="description" class="form-label">
                        <h4 class="violet-text">Perchè vuoi diventare revisore?</h4>
                    </label>
                    <textarea name="description" id="description"
                    class="form-control myinput" cols="30" rows="10">
                    </textarea>
                    <button type="submit" class="btn mybtn mt-2">Inoltra Richiesta</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>