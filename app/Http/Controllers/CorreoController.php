<?php

namespace App\Http\Controllers;

use App\Core\Utils\SupportFile;
use App\Models\Correo;
use App\Models\Pagina;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $correos = Correo::all();
        return view('', ['correos'=>$correos]);
    }

    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $correo = Correo::findOrFail($id);
        return view('', ['correo'=>$correo]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('');
    }

    public function store(Request $request)
    {
        $correo = new Correo($request->all());
        $correo->save();
        return redirect()->route('correo.index');
    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $correo = Correo::findOrFail($id);
        return view('', ['correo'=>$correo]);
    }

    public function update($id, Request $request)
    {
        $correo = Correo::findOrFail($id);
        $correo->nombre = $request->input('nombre');
        $correo->correo = $request->input('correo');
        $request->save();
        return redirect()->route('correo.index');
    }

    public function destroy($id)
    {
        $correo = Correo::findOrFail($id);
        $correo->delete();
        return redirect()->route('correo.index');
    }
}
