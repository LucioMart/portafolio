@extends('layout')

@section('tituloPagina', 'Portfolio')

@section('content')

<h1 class="display-4">@lang('Projects')</h1>

@auth('')
    
    <button><a href="{{ route('projects.create') }}">Nuevo Projecto</a></button>

@endauth
    
    <ul class="list-group">

        @forelse($projects as $project)

            <li class="list-group-item {{-- border-0 --}} mb-3 shadow-sm">
                <a href="{{ route('projects.show', $project) }}">
                    {{ $project->title }} -
                    {{ $project->created_at->format('d/m/Y') }}
                 </a> 
            </li>

        @empty

            <li> No hay proyectos </li>

        @endforelse

    </ul>

    {{ $projects->links() }}

@endsection