<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes=DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $usuario= $request->input('nombre');

        session()->flash('exito', 'Se guardo el usuario '.$usuario);
        return to_route('rutaForm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente=DB::table('clientes')->where('id',$id)->first();
        return view('editar',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorClientes $request, string $id)
    {
        DB::table('clientes')->where('id',$id)->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'updated_at' => Carbon::now()
        ]);
        $usuario= $request->input('nombre');

        session()->flash('updated', 'Se actualizo el usuario '.$usuario);
        return to_route('rutaClientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id',$id)->delete();
        session()->flash('deleted', 'Se elimino el usuario con id: '.$id);
        return to_route('rutaClientes');
    }
}
