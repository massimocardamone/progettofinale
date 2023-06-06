<x-layout docTitle="Login" title="Effettua il Login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="userMail" class="form-label">Email utente</label>
                    <input type="email" class="form-control" name="email" id="userMail"> 
                </div>
                <div class="mb-3">    
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="userPassword">
                </div>
                <div class="mb-3 form-check">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </form>
        </div>
    </div>
</x-layout>


