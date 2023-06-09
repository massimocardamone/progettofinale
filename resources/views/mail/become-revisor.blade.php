<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richiesta Reviso</title>
    <style>
        .mybtn{
    background-color: var(--darkt);
    color: var(--acc);
    border-color: var(--acc);
    border-radius: 5px 5px 5px 5px;
    width: 160px;
    height: 40px;
    margin-top: 3px;
    margin-bottom: 3px;
    box-shadow: 0px 0px 10px;
    font-style: italic;
  }
    </style>
</head>
<body>
    <h1>L'utente ha richiesto di diventare revisore</h1>
    <h3>{{$user->name}}</h3>
    <h3>{{$user->email}}</h3>
    <a href="{{route('make.revisor',compact('user'))}}"  class="mybtn">Rendi revisore</a>
</body>
</html>