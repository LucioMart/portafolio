<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix("/css/app.css") }}">
    <script src="/js/app.js" defer></script>
    <title>@yield('tituloPagina')</title>
    <style>
        .active{
            color: green;
            text-decoration: none;
        }
    </style>
</head>
<body>
   {{-- <pre> {{ dump(request()->routeIs('home')) }} </pre>  --}}
    
    @include('nav.navb')

    <h1>@yield('tituloEncabezado')</h1>
    <section>
        @yield('content')
    </section>
</body>
</html>