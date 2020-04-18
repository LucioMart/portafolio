@extends('layout')

@section('tituloPagina', 'Portfolio')

@section('tituloEncabezado')
    Portfolio
@endsection

@section('contenido')
    
    <ul>

        @forelse($portfolios as $portfolio)

            <li>{{ $portfolio['title'] }} <small> {{ $loop->last ? 'Es el ultimo' : '' }} </small></li>

        @empty

            <li> No hay proyectos </li>

        @endforelse

    </ul>

@endsection