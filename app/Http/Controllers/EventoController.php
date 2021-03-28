<?php

namespace App\Http\Controllers;

use App\Core\Utils\SupportFile;
use App\Models\Evento;
use App\Models\Pagina;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $eventos = Evento::all();
        return view('', ['eventos'=>$eventos]);
    }

    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $evento = Evento::findOrFail($id);
        return view('', ['evento'=>$evento]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('');
    }

    public function store(Request $request)
    {
        $evento = new Evento($request->all());
        $evento->foto = SupportFile::saveImage($request, 'foto', 'foto/evento/');
        $evento->save();
        return redirect()->route('evento.index');
    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $evento = Evento::findOrFail($id);
        return view('', ['evento'=>$evento]);
    }

    public function update($id, Request $request)
    {
        $evento = Evento::findOrFail($id);
        $evento->fecha_evento = $request->input('fecha_evento');
        $evento->ubicacion = $request->input('ubicacion');
        $evento->descripcion = $request->input('descripcion');
        $evento->tipo = $request->input('tipo');
        $evento->titulo = $request->input('titulo');
        if($request->hasFile('foto')) {
            $evento->foto = SupportFile::saveImage($request, 'foto', 'foto/evento/');
        }
        $request->save();
        return redirect()->route('evento.index');
    }

    public function delete($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('evento.index');
    }
}
