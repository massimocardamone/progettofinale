<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $docTitle }}</title>
    <link rel="shortcut icon" href="/media/favicon.ico" />
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>

<body>




    <div id="Start" class="d-flex justify-content-center vh-100 align-items-center">
        <div class="spinner spinner-border text-g" role="status">
            <span class=" visually-hidden">Loading...</span>
        </div>
    </div>

    <div id="End" class="d-none">
    <x-navbar />
    <x-header :title="$title" />
    @if (session('message'))
        <div class="alert alert-success text-center">
            <h3 class="lead">{{ session('message') }}</h3>
        </div>
    @endif
    @if (session('access_denied'))
        <div class="alert alert-danger text-center">
            <h3 class="lead">{{ session('access_denied') }}</h3>
        </div>
    @endif
        {{ $slot }}
    </div>





    @livewireScripts
    @vite(['resources/js/app.js'])

    <x-footer></x-footer>
</body>

</html>
