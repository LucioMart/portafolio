@extends('layout')

@section('tituloPagina', 'Crear Projecto')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded"
                    action="{{ route('projects.store') }}" method="post">

                    <h1 class="display-4">Nuevo proyecto:</h1>

                    <hr>

                    @csrf

                    @include('projects._form', ['botonEnviar' => 'Guardar'])

                </form>

            </div>

        </div>

    </div>

@endSection