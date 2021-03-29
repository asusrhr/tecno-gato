<?php

namespace App\Http\Controllers;

use App\Models\Difusion;
use App\Models\Evento;
use App\Models\Pagina;
use Illuminate\Http\Request;

class DifusionController extends Controller
{
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $difusiones = Difusion::all();
        $difusiones->load('evento');
        return view('', ['difusiones'=>$difusiones]);
    }

    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $difusion = Difusion::findOrFail($id);
        $difusion->load('evento');
        $difusion->load('correos');
        return view('', ['difusiones'=>$difusion]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        $eventos = Evento::all();
        return view('', ['eventos' => $eventos]);
    }

    public function store(Request $request)
    {
        $difusion = new Difusion($request->all());
        $difusion->save();
        return redirect()->route('difusion.index');
    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $eventos = Evento::all();
        $difusion = Difusion::findOrFail($id);
        return view('', ['difusion'=>$difusion, 'eventos'=>$eventos]);
    }

    public function update($id, Request $request)
    {
        $difusion = Difusion::findOrFail($id);
        $difusion->titulo = $request->input('titulo');
        $difusion->descripcion = $request->input('descripcion');
        $difusion->fecha = $request->input('fecha');
        $difusion->id_evento = $request->input('id_evento');
        $difusion->save();
        return redirect()->route('difusion.index');
    }

    public function destroy($id)
    {
        $difusion = Difusion::findOrFail($id);
        $difusion->delete();
        return redirect()->route('difusion.index');
    }
}
