@extends('layouts.plantilla1')

@section('titulo')
Clientes
@endsection

@section('contenido')
    <div class="container mt-5 col-md-6">
        @if(@session('exito'))
            <x-alert tipo='success'>{{session('exito')}}</x-alert>
        @endif
        @session('exito')
            <x-alert tipo='danger'>{{session('exito')}}</x-alert>
        @endsession
        @session('exito')
            <script>
                Swal.fire({
                    title: "Respuesta del servidor",
                    text: "{{$value}}",
                    icon: "success"
                });
            </script>
        @endsession
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{__("Registro de clientes")}}
            </div>
            <form action="{{route("procesarCliente")}}" method="POST">
                @csrf
                <div class="card-body text-justify">
                    <div class="mb-3">
                       <label for="nombre" class="form-label">{{__("Nombre")}}:</label>
                       <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                       <small class="fst-italic text-danger">{{$errors->first('nombre')}}</small>
                    </div>
                    <div class="mb-3">
                       <label for="apellido" class="form-label">{{__("Apellido")}}:</label>
                       <input type="text" class="form-control" name="apellido" value="{{old('apellido')}}">
                       <small class="fst-italic text-danger">{{$errors->first('apellido')}}</small>
                    </div>
                    <div class="mb-3">
                       <label for="email" class="form-label">{{__("Correo electrónico")}}:</label>
                       <input type="text" class="form-control" name="email" value="{{old('email')}}">
                       <small class="fst-italic text-danger">{{$errors->first('email')}}</small>
                    </div>
                    <div class="mb-3">
                       <label for="telefono" class="form-label">{{__("Teléfono")}}:</label>
                       <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
                       <small class="fst-italic text-danger">{{$errors->first('telefono')}}</small>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">{{__("Guardar cliente")}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection