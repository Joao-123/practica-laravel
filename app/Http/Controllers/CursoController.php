<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return view('cusos.index'); 
    }

    public function create() {
        return view('cursos.create');
    }

    public function show($curso) {
        //compact('curso'); -> devuelve ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }
}