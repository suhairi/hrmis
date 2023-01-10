<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.png') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/multiform.css') }}" id="bootstrap">
        
        @livewireStyles()

        <!-- Styles -->
        
       
    </head>
    <body class="antialiased">
        

        @livewire('welcome')

        @livewireScripts()


    </body>
</html>
