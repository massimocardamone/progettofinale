<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$docTitle}}</title>
    <link rel="shortcut icon" href="/media/favicon.ico" />
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>

<body>
    
    <x-navbar/>
    <x-header :title="$title"/>
    @if (session('message'))
    <div class="alert alert-success text-center">
       <h3 class="lead">{{ session('message') }}</h3> 
    </div>
    <link rel="shortcut icon" href="[percorso]/favicon.ico" />
    @endif
    @if (session('access_denied'))
    <div class="alert alert-danger text-center">
       <h3 class="lead">{{ session('access_denied') }}</h3> 
    </div>
    @endif

   

    {{$slot}}





    @livewireScripts
    @vite(['resources/js/app.js'])

    <x-footer></x-footer>
</body>
</html>