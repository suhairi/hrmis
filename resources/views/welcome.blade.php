<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        
        @livewireStyles()

        <!-- Styles -->
        
       
    </head>
    <body class="antialiased">
        

        @livewire('welcome')



    </body>
</html>
