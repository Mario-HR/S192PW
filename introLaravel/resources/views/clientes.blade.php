@extends('layouts.plantilla1')

@section('titulo')
Clientes
@endsection

@section('contenido')
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
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-warning btn-sm">{{__("Update")}}</button>
                        <button type="submit" class="btn btn-danger btn-sm">{{__("Delete")}}</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection