<x-layout docTitle="Login" title="Effettua il Login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
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
                    <div class="mb-3 form-check d-flex justify-content-start">
                        <button type="submit" class="btn btn-success px-4">Accedi</button>
                    </div>    
                </form>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <h5 class="ms-3" >Non sei registrato?</h5>
                    <a href="{{route('register')}}" class="nav-link"><button class="btn btn-success ms-4">Registrati</button></a>
                </div>
            </div>        
        </div>
    </div>
</x-layout>
