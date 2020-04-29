@extends('layout')

@section('tituloPagina', 'Portafolio | '.$project->title )



@section('tituloEncabezado')

    Detalle del Project

@endsection


@section('content')


    {{ $project->description }}. <small>Fecha creacion: {{ $project->created_at }}.</small>
                                <small>Fecha actualizacion: {{ $project->updated_at }}</small><a href="{{ route('projects.edit', $project) }}">Editar</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Eliminar</button>
                                </form>

@endsection