@extends('layout')

@section('tituloPagina', 'Edición de Proyecto')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto"> 

            @include('partials.validation-errors')

            <form  class="bg-white py-3 px-4 shadow rounded"
                    action="{{ route('projects.update', $project) }}" 
                    method="post">

                    <h1>Editar Proyecto</h1>
            
                @method('patch')
                @include('projects._form', ['botonEnviar' => 'Actualizar'])
                
            </form>

        </div>

    </div>

</div>

@endsection