<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministradorStoreRequest;
use App\Http\Requests\AdministradorUpdateRequest;
use App\Models\Cliente;
use App\Models\Pagina;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        Pagina::contarPagina(\request()->path());
        $clientes = Cliente::all();
        $clientes->load('persona');
        return view('cliente.index', ['clientes'=>$clientes]);
    }

    public function show($id){
        Pagina::contarPagina(\request()->path());
        $cliente = Cliente::findOrFail($id);
        $cliente->load('persona');
        $cliente->persona->load('user');
        return view('cliente.show', ['cliente'=>$cliente]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('cliente.create');
    }

    public function store(AdministradorStoreRequest $request)
    {
        $persona = new Persona($request->all());
        $persona->tipo = 1;
        $persona->save();

        $user = new User();
        $user->email= $request['email'];
        $user->password = bcrypt($request['password']);
        $user->id_persona = $persona->id;
        $user->save();

        $cliente = new Cliente();
        $cliente->id_persona = $persona->id;
        $cliente->save();

        return redirect()->route('cliente.index');

    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $cliente= Cliente::findOrFail($id);
        return view('cliente.edit', ['cliente'=>$cliente]);

    }

    public function update($id, AdministradorUpdateRequest $request)
    {
        $cliente = Cliente::findOrFail($id);
        $persona = Persona::findOrFail($cliente->id_persona);
        $persona->nombre = $request['nombre'];
        $persona->apellido_paterno = $request['apellido_paterno'];
        $persona->apellido_materno = $request['apellido_materno'];
        $persona->carnet_identidad = $request['carnet_identidad'];
        $persona->direccion = $request['direccion'];
        $persona->fecha_nacimiento = $request['fecha_nacimiento'];
        $persona->telefono = $request['telefono'];
        $persona->save();
        return redirect()->route('cliente.index');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $id_persona = $cliente->id_persona;
        $cliente->delete();

        $persona = Persona::findOrFail($id_persona);
        $user = $persona->user;
        $user->delete();
        $persona->delete();

        return redirect()->route('cliente.index');

    }
}
