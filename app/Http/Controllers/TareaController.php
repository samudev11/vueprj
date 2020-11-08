<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::paginate();

        return view('tarea', compact('tareas'));

    }
    
    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->descripcion = $request->descripcion;

        $tarea->save();

        // $tareas = Tarea::paginate(5);
        // return view('tarea', compact('tareas'));
        
    }

}
