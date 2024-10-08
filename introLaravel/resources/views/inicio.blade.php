<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
    <style>
      body, html {
        height: 100%;
      }
      .full-height {
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
      <h1 class="display-1">Bienvenido Turista!</h1>
      <p>Presiona el botón para iniciar...</p>
      <a href="{{route('rutaForm')}}" class="btn btn-primary">Ir al registro</a>
    </div>
  </body>
</html>
