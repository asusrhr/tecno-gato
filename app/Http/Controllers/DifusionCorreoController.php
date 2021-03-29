<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use App\Models\DifusionCorreo;
use App\Models\Evento;
use App\Models\Pagina;
use Illuminate\Http\Request;

class DifusionCorreoController extends Controller
{
    public function create($id_evento)
    {
        Pagina::contarPagina(\request()->path());
        $evento = Evento::findOrFail($id_evento);
        $correos = Correo::all();
        return view('', ['correos'=>$correos, 'evento'=>$evento]);
    }

    public function store($id_evento, Request $request)
    {
        $dif = new DifusionCorreo($request->all());
        $dif->id_evento = $id_evento;
        $dif->save();
        return redirect()->route('evento.show', [$id_evento]);
    }

    public function destroy($id_evento, $id)
    {
        $dif = DifusionCorreo::findOrFail($id);
        $dif->delete();
        return redirect()->route('evento.show', [$id_evento]);
    }
}
