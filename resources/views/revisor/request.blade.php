<x-layout docTitle="Domanda Revisor" title="Lavora con noi">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                <h3 class="marginStart"> Nome: {{$user->name}}</h3>
                <h3 class="marginStart"> Email: {{$user->email}}</h3>
            </div>
            <div>
                <form action="{{route('become.revisor')}}" method="POST">
                    @csrf
                    <label for="description" class="form-label">Perchè vuoi diventare revisore?</label>
                    <textarea name="description" id="description"
                    class="form-control myinput" cols="30" rows="10">
                    </textarea>
                    <button type="submit" class="btn btn-success">Inoltra Richiesta</button>
                </form>
            </div>
            

            
        </div>
    </div>
</div>
</x-layout>