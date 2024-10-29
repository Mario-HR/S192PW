<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('rutaInicio')}}">
                Turista sin maps
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs("rutaForm")?'text-warning':'' }}" aria-current="page" href="{{route('rutaForm')}}">{{__("Registro de clientes")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs("rutaClientes")?'text-success':'' }}" href="{{route('rutaClientes')}}">{{__("Consultar clientes")}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenido')
</body>
</html>