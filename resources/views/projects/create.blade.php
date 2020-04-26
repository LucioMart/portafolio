@extends('layout')

@section('tituloPagina', 'Crear Projecto')

@section('tituloEncabezado')

    Crear Projecto:

@endsection

@section('content')

    @include('partials.validation-errors')

    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        @include('projects._form', ['botonEnviar' => 'Guardar'])
    </form>

@endSection