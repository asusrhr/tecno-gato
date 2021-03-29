<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministradorStoreRequest;
use App\Http\Requests\AdministradorUpdateRequest;
use App\Models\Administrador;
use App\Models\Pagina;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){

        Pagina::contarPagina(\request()->path());
        $administradores = Administrador::all();
        $administradores->load('persona');
        return view('administrador.index', ['administradores'=>$administradores]);
    }

    public function show($id){
        Pagina::contarPagina(\request()->path());
        $administrador = Administrador::findOrFail($id);
        $administrador->load('persona');
        $administrador->persona->load('user');
        return view('administrador.show', ['administrador'=>$administrador]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('administrador.create');
    }

    public function store(AdministradorStoreRequest $request)
    {
        $persona = new Persona($request->all());
        $persona->tipo = 0;
        $persona->save();

        $user = new User();
        $user->email= $request['email'];
        $user->password = bcrypt($request['password']);
        $user->id_persona = $persona->id;
        $user->save();

        $administrador = new Administrador();
        $administrador->id_persona = $persona->id;
        $administrador->save();


        return redirect()->route('administrador.index');

    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $administrador = Administrador::findOrFail($id);
        return view('administrador.edit', ['administrador'=>$administrador]);

    }

    public function update($id, AdministradorUpdateRequest $request)
    {
        $administrador = Administrador::findOrFail($id);
        $persona = Persona::findOrFail($administrador->id_persona);
        $persona->nombre = $request['nombre'];
        $persona->apellido_paterno = $request['apellido_paterno'];
        $persona->apellido_materno = $request['apellido_materno'];
        $persona->carnet_identidad = $request['carnet_identidad'];
        $persona->direccion = $request['direccion'];
        $persona->fecha_nacimiento = $request['fecha_nacimiento'];
        $persona->telefono = $request['telefono'];
        $persona->save();
        return redirect()->route('administrador.index');
    }

    public function destroy($id)
    {
        $administrador = Administrador::findOrFail($id);
        $id_persona = $administrador->id_persona;
        $administrador->delete();

        $persona = Persona::findOrFail($id_persona);
        $user = $persona->user;
        $user->delete();
        $persona->delete();

        return redirect()->route('administrador.index');

    }
}
