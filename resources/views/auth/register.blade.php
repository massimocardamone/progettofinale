<x-layout docTitle="Register" title="Registrati">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label for="userName" class="form-label">Nome utente</label>
                    <input type="text" class="form-control" name="name" id="userName"> 
                </div>
                <div class="mb-3">
                    <label for="userMail" class="form-label">Email utente</label>
                    <input type="email" name="email" class="form-control" id="userMail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">    
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <label for="passwordConfirmation" class="form-label">Conferma password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="passwordConfirmation"> 
                </div>
                <div class="mb-3 form-check">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </form>
        </div>
    </div>
</x-layout>




