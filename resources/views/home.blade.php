@extends('layout')

@section('tituloPagina', 'Inicio')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Dolorum deleniti officiis, similique amet iure eligendi 
                 sint corporis quaerat in! Inventore, commodi a! Obcaecati 
                 tenetur quidem corporis adipisci ducimus quas maxime.</p>
                 <a class="btn btn-lg btn-block btn-primary"
                    href="{{ route('contact') }}">
                    Contáctame
                </a>
                <a class="btn btn-lg btn-block btn-outline-primary"
                    href="{{ route('projects.index') }}">
                    Portafolio
                </a>
        </div>
        <div class="col-12 mt-3 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
        </div>
    </div>
</div>

@endsection