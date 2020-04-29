@extends('layout')

@section('tituloPagina', 'Inicio')

@section('tituloEncabezado')
    {{ __('Home') }}
@endsection

@section('content')

@auth()
    
    {{ auth()->user()->name }}

@endauth

@endsection