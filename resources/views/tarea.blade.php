@extends('layouts.layout')
@section('title', 'SCD - Laravel8--Vuejs App')

@section('content')

<h1>Tarea registrada bien</h1>


<ul class="list-group list-group-flush">
    @foreach ($tareas as $tarea)            
        <li class="list-group-item">
            <label class="checkbox-inline float-left">
                <input type="checkbox" style="margin-right:1em;">{{$tarea->descripcion}}
            </label>                               
            
            <button type="button" class="btn btn-outline-danger btn-sm float-right" v-on:click="EliminarTarea(tarea)">Eliminar</button>
        </li>
    @endforeach
</ul>
<ul class="pagination">
    {{$tareas->links()}}
</ul>



@endsection

