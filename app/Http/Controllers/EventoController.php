<?php

namespace App\Http\Controllers;

use App\Utils\SupportFile;
use App\Models\Evento;
use App\Models\Mensaje;
use App\Models\Pagina;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $eventos = Evento::all();
        return view('evento.index', ['eventos'=>$eventos]);
    }

    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $evento = Evento::findOrFail($id);
        $evento->load('difusiones');
        $evento->load('mensajes');
        return view('evento.show', ['evento'=>$evento]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('evento.create');
    }

    public function store(Request $request)
    {
        $evento = new Evento($request->all());
        $evento->foto = SupportFile::saveImage($request, 'foto', 'foto/evento/');
        $evento->id_persona = auth()->user()->id_persona;
        $evento->save();
        return redirect()->route('evento.index');
    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $evento = Evento::findOrFail($id);
        return view('evento.edit', ['evento'=>$evento]);
    }

    public function update($id, Request $request)
    {
        $evento = Evento::findOrFail($id);
        $evento->fecha_evento = $request->input('fecha_evento');
        $evento->direccion = $request->input('direccion');
        $evento->descripcion = $request->input('descripcion');
        $evento->titulo = $request->input('titulo');
        if($request->hasFile('foto')) {
            $evento->foto = SupportFile::saveImage($request, 'foto', 'foto/evento/');
        }
        $evento->save();
        return redirect()->route('evento.index');
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('evento.index');
    }
}
