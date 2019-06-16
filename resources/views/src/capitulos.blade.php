@extends('layouts.app')

@section('content')
    <div class="container">

        <capitulos-component v-bind:idlibro="{{$id_libro}}" v-bind:idcapitulo="{{$id_capitulo}}"></capitulos-component>

    </div>
@endsection