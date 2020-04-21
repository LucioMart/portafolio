@extends('layout')

@section('tituloPagina', 'Portfolio')

@section('tituloEncabezado')
    {{ __('Portfolio') }}
@endsection

@section('content')
    
    <ul>

        @forelse($projects as $project)

            <li><a href="/portfolio/detalle/{{ $project->id }}">{{ $project->title }} </a></li>

        @empty

            <li> No hay proyectos </li>

        @endforelse

    </ul>

@endsection