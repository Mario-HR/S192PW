<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function home() {
        return view('inicio');
    }
    public function formulario() {
        return view('formulario');
    }
    public function consulta() {
        return view('clientes');
    }
    public function procesarCliente(Request $peticion) {
        $validated = $peticion->validate([
            'nombre'=>'required|min:3|max:255',
            'apellido'=>'required|min:3|max:255',
            'email'=>'required|email:rfc,dns',
            'telefono'=>'required|numeric'
        ]);
        //redirección con valores en sesion
        $usuario= $peticion->input('nombre');

        session()->flash('exito', 'Se guardo el usuario '.$usuario);
        return to_route('rutaForm');
    }
}
