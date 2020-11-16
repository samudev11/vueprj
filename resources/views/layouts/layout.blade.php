<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->        
        <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
        
        
    </head>
   
    <div id="app-nav">
        <navbar-menu></navbar-menu>
    </div>
    <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
    

        <body class="antialiased">     
        
                @yield('content')                                         
                
            <footer-section></footer-section>
        </body>


    </div>     
    <!-- App script -->   
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
</html>