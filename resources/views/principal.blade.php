
@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Principal</title>

    </head>
    <body  class="  m-5 pb-5 ">

    <div class="row ">
        <div class="jumbotron col-6 ">
            <h1 class="display-3">Antiguo testamento</h1>
            <p class="lead">Autores con mas libros:</p>
            <div class="row">
                <span class="badge  badge-primary col-4">Secondary</span>
                <span class="badge  badge-primary col-4">Secondary</span>
                <span class="badge  badge-primary col-4">Secondary</span>

            </div>
            <hr class="my-2">
            <p>Porcentaje leído:</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br/>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('antiguo') }}" role="button">Leer</a>
            </p>
        </div>
        <div class="jumbotron col-6 block">
            <h1 class="display-3">Nuevo testamento</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-2">
            <p>Porcentaje leído:</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br/>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('nuevo') }}" role="button">Leer</a>
            </p>
        </div>
    </div>
    <div>
        <div class="text-center">
            <a class="btn btn-warning btn-lg" href="{{ route('editar') }}" role="button">Editar</a>
        </div>

    </div>


    </body>
</html>
@endsection