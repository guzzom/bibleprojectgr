<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    function antiguo (){
        return view('src/antiguo');
    }

    function nuevo (){
        return view('src/nuevo');
    }

    function libros ($id){
        return view('src/libros',compact('id'));
    }

    function capitulos ($id_libro,$id_capitulo){
        return view('src/capitulos',compact('id_libro','id_capitulo'));
    }

    function editar (){
        return view('src/editar');
    }
}
