<x-layout docTitle="Register" title="Registrati">
    <div class="container">
        <div class="row mysezione11">
            <h3>Benvenuto!</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mysection m-3 p-3">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Nome utente</label>
                        <input type="text" class="form-control myinput text-light" name="name" id="userName"> 
                    </div>
                    <div class="mb-3">
                        <label for="userMail" class="form-label">Email utente</label>
                        <input type="email" name="email" class="form-control myinput text-light" id="userMail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">    
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control myinput text-light" id="exampleInputPassword1"> 
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control myinput text-light" id="passwordConfirmation">
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-center">
                        <button type="submit" class="btn mybtn mt-3">Registrati</button>
                    </div>    
                </form>            
            </div>
        </div>
    </div>
</x-layout>




