@extends('layout')

@section('tituloPagina', 'Edición de Proyecto')

@section('tituloEncabezado', 'Editar el proyecto' )



@section('content')

@include('partials.validation-errors')

    <form action="{{ route('projects.update', $project) }}" method="post">
    
        @method('patch')
        @include('projects._form', ['botonEnviar' => 'Actualizar'])
        
    </form>

@endsection