@extends('layouts.app')

@section('content')
    <div class="container">
        <libros-component v-bind:idlibro="{{$id}}"></libros-component>


    </div>
@endsection