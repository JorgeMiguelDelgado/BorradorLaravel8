<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Menu xd</h1>
        <ul>
            <li><a href="{{route('welcome')}}">Pagina Principal</a></li>
            <li><a href="{{route('products.index')}}">Productos</a></li>
            <li><a href="{{route('nosotros')}}">Contacto</a></li>
        </ul>
    </header>
    @yield('content')
</body>
</html>