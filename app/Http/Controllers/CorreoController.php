<?php

namespace App\Http\Controllers;

use App\Core\Utils\SupportFile;
use App\Http\Requests\CorreoStoreRequest;
use App\Http\Requests\CorreoUpdateRequest;
use App\Models\Correo;
use App\Models\Pagina;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $correos = Correo::all();
        return view('correo.index', ['correos'=>$correos]);
    }

    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $correo = Correo::findOrFail($id);
        return view('correo.show', ['correo'=>$correo]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('correo.create');
    }

    public function store(CorreoStoreRequest $request)
    {
        $correo = new Correo($request->all());
        $correo->id_persona = auth()->user()->id_persona;
        $correo->save();
        return redirect()->route('correo.index');
    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $correo = Correo::findOrFail($id);
        return view('correo.edit', ['correo'=>$correo]);
    }

    public function update($id, CorreoUpdateRequest $request)
    {
        $correo = Correo::findOrFail($id);
        $correo->nombre = $request->input('nombre');
        $correo->correo = $request->input('correo');
        $correo->save();
        return redirect()->route('correo.index');
    }

    public function destroy($id)
    {
        $correo = Correo::findOrFail($id);
        $correo->delete();
        return redirect()->route('correo.index');
    }
}
