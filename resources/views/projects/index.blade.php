@extends('layout')

@section('tituloPagina', 'Portfolio')

@section('tituloEncabezado')
    {{ __('Portfolio') }}
@endsection

@section('content')

<button><a href="{{ route('projects.create') }}">Nuevo Projecto</a></button>
    
    <ul>

        @forelse($projects as $project)

            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }} </a> </li>

        @empty

            <li> No hay proyectos </li>

        @endforelse

    </ul>

    {{ $projects->links() }}

@endsection