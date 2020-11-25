@extends('layouts.layout')
@section('title', 'SCD - Laravel8--Vuejs App')

@section('content')


<login></login>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif --}}
    
    <!--<example-component></example-component>Añadimos nuestro componente vuejs-->

    <!--Seccion de añadir Tareas-->
    <div class="container">
        <div style="height:5em;">
        
        </div>
        <div class="alert alert-success text-center" role="alert">
            TODO LIST
            </div>
        <div class=" justify-content-center" style="text-align:center;">
            <div class="col-md-12 justify-content-center" style="text-align:center;">
                
            {{-- <form action="{{route('tareas.store')}}" method="POST">
                    @csrf --}}
                    <div class="input-group mb-3">
                        <input type="text" name="descripcion" class="form-control" placeholder="Introduce tu tarea" v-model="txtTarea">
                        <div class="input-group-append">
                            <button type="button" v-on:click="AgregarTarea" class="btn btn-outline-success my-2 my-sm-0">Añadir tarea</button>
                        </div>
                    </div>        
                {{-- </form> --}}
            
                <div class="col-md-12 justify-content-center card" style="text-align:center; margin-top:2em;">

                    <ul v-for="tarea in listTareas" class="list-group list-group-flush">
                        <li class="list-group-item" :style="tarea.checked ? { 'background-color': '#e6e6e6' } : null">
                            <label class="checkbox-inline float-left">
                                <input type="checkbox" v-model="tarea.checked" v-on:click="CheckTarea" style="margin-right:1em;">@{{tarea.texto}}
                            </label>                               
                            
                            <button type="button" class="btn btn-outline-danger btn-sm float-right fa fa-trash" v-on:click="EliminarTarea(tarea)">Eliminar</button>
                            
                        </li>
                    </ul>
                    
            
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>
        <br>

        
          {{-- <div class="container">
            <ul class="list-group">
                <li v-for="item in listUsers" v-bind:key="item" class="list-group-item">
                    @{{item.name.first}} @{{item.name.last}}
                </li>
            </ul>
          </div>
               --}}
               <div class="jumbotron jumbotron-fluid" style="background-color:cadetblue;">
                <div class="container">
                  <h1 class="display-4">API - VUE - AXIOS</h1>
                  <p class="lead">Esto es una consulta a una API de usuarios de la web randomuser.me</p>
                </div>
              </div>
              <br>
              <h2 style="text-align: center;">Listado de usuarios (Flex grid CSS)</h2>
            <div class="contenedor">
                
                    <main-section v-for="user in listUsers" :user="user"></main-section>
                
            </div>
           

</div>
@endsection
