<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>HR SYSTEM</title>
    
    <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-image: url({{ URL::to('assets/img/background2.webp') }});
        }
    </style>

</head>

<body>
    
    @yield('content')


    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

    @stack('scripts')

</body>
</html>
