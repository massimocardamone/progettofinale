<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$docTitle}}</title>
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>

<body>
    
    <x-navbar/>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <x-header title="{{$title}}"/>

   

    {{$slot}}





    @livewireScripts
    @vite(['resources/js/app.js'])
</body>
</html>