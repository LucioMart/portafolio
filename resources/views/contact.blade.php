@extends('layout')

@section('tituloPagina', 'Contact')

@section('tituloEncabezado')
    Contact
@endsection

@section('content')

    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nombre..." value="Lucio"><br>
        <input type="email" name="email" placeholder="Email ..." value="luchoweb15@gmail.com"><br>
        <input type="text" name="subject" placeholder="Asunto..." value="Estudio"><br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje...">Repasando Laravel</textarea><br>
        <button type="submit">Enviar</button>
    </form>

@endsection