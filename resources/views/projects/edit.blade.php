@extends('layout')

@section('tituloPagina', 'Edición de Proyecto')

@section('tituloEncabezado', 'Editar el proyecto' )

@section('content')

@if ($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif

    <form action="{{ route('projects.update', $project) }}" method="post">
    
        @csrf
        @method('patch')
        <label for="">Titulo del Projecto:</label><br>
        <input type="text" name="title" value="{{ old('title', $project->title) }}"><br>
        <label for="">URL del Projecto:</label><br>
        <input type="text" name="url" value="{{ old('url', $project->url) }}"><br>
        <label for="">Descripción del Projecto:</label><br>   
        <textarea name="description" id="" cols="30" rows="10">{{ old('description', $project->description) }}</textarea><br>
        <button type="submit">Actualizar</button>
        
    </form>

@endsection