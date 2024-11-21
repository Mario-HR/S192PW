@extends('layouts.plantilla1')

@section('titulo')
Editar cliente
@endsection

@section('contenido')
    <div class="container mt-5 col-md-6">
        <script>
            function confirm(button) {
            Swal.fire({
                title: "Confirmación de actulización de los datos del cliente",
                text: "¿Estás seguro de que deseas actualizar estos datos del cliente?",
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
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{__("Registro de clientes")}}
            </div>
            <form action="{{route("actualizarCliente", $cliente->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body text-justify">
                    <div class="mb-3">
                       <label for="nombre" class="form-label">{{__("Nombre")}}:</label>
                       <input type="text" class="form-control" name="nombre" value="{{$cliente->nombre}}">
                       <small class="fst-italic text-danger">{{$errors->first('nombre')}}</small>
                    </div>
                    <div class="mb-3">
                       <label for="apellido" class="form-label">{{__("Apellido")}}:</label>
                       <input type="text" class="form-control" name="apellido" value="{{$cliente->apellido}}">
                       <small class="fst-italic text-danger">{{$errors->first('apellido')}}</small>
                    </div>
                    <div class="mb-3">
                       <label for="email" class="form-label">{{__("Correo electrónico")}}:</label>
                       <input type="text" class="form-control" name="email" value="{{$cliente->correo}}">
                       <small class="fst-italic text-danger">{{$errors->first('email')}}</small>
                    </div>
                    <div class="mb-3">
                       <label for="telefono" class="form-label">{{__("Teléfono")}}:</label>
                       <input type="text" class="form-control" name="telefono" value="{{$cliente->telefono}}">
                       <small class="fst-italic text-danger">{{$errors->first('telefono')}}</small>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="button" class="btn btn-success btn-sm" onclick="confirm(this)">{{__("Actualizar cliente")}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection