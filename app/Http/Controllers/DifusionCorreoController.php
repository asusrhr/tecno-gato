<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use App\Models\Difusion;
use App\Models\DifusionCorreo;
use App\Models\Evento;
use App\Models\Pagina;
use Illuminate\Http\Request;

class DifusionCorreoController extends Controller
{
    public function create($id_difusion)
    {
        Pagina::contarPagina(\request()->path());
        $difusion = Difusion::findOrFail($id_difusion);
        $correos = Correo::all();
        return view('difusion.correo.create', ['correos'=>$correos, 'difusion'=>$difusion]);
    }

    public function store($id_difusion, Request $request)
    {
        $dif = new DifusionCorreo($request->all());
        $dif->id_difusion = $id_difusion;
        $dif->save();
        return redirect()->route('difusion.show', [$id_difusion]);
    }

    public function destroy($id_difusion, $id)
    {
        $dif = DifusionCorreo::findOrFail($id);
        $dif->delete();
        return redirect()->route('difusion.show', [$id_difusion]);
    }
}
