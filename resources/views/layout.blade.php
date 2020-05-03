<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

   <div id="app" class="d-flex flex-column h-screen justify-content-between">
    
    <header>

        @include('nav.navb')
        @include('partials.session_status')

    </header>

    <main class="py-3">

        <h1>@yield('tituloEncabezado')</h1>
        <section>
            @yield('content')
        </section>

    </main>

    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{ config('app.name') }} | Copyright @ {{ date('Y') }}
    </footer>
        
   </div>
</body>
</html>