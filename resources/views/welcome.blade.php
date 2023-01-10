<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.png') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">
        <!-- <link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ URL::to('assets/css/jquery.dataTables.min.css') }}"> -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/multiform.css') }}" id="bootstrap">
        
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        @livewireStyles

        <!-- Styles -->
        
       
    </head>
    <body class="antialiased">
        

        @livewire('welcome')


        <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
        
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

        @livewireScripts

    </body>
</html>
