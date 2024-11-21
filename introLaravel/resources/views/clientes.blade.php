@extends('layouts.plantilla1')

@section('titulo')
Clientes
@endsection

@section('contenido')
    <script>
        function confirm(button) {
            Swal.fire({
                title: "Confirmación de eliminación del cliente",
                text: "¿Estás seguro de que deseas eliminar al cliente?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Continuar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
    @session('updated')
    <script>
        Swal.fire({
            title: "Respuesta del servidor",
            text: "{{$value}}",
            icon: "success"
        });
    </script>
    @endsession
    @session('deleted')
    <script>
        Swal.fire({
            title: "Respuesta del servidor",
            text: "{{$value}}",
            icon: "success"
        });
    </script>
    @endsession
    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)
            <div class="card text-justify font-monospace mt-3">
                <div class="card-header fs-5 text-primary">
                    {{$cliente->nombre.' '.$cliente->apellido}}
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">{{$cliente->correo}}</h5>
                    <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>
                <div class="card-footer text-muted">
                    <div class="d-flex gap-2 mt-2 mb-1">
                        <a href="{{route('rutaEdit', $cliente->id)}}" class="btn btn-warning btn-sm">{{__("Update")}}</a>
                        <form action="{{ route('eliminarCliente', $cliente->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirm(this)">{{__("Delete")}}</button>
                        </form>                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection