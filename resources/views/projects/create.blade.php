@extends('layout')

@section('tituloPagina', 'Crear Projecto')

@section('tituloEncabezado')

    Crear Projecto:

@endsection

@section('content')

    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        <label for="">Titulo:</label><br>
        <input type="text" name="title"><br>
        <label for="">Descripción:</label><br>
        <input type="text" name="description"><br>
        <label for="">URL:</label><br>
        <input type="text" name="url"><br>
        <button type="submit">Guardar</button>
    </form>

@endSection