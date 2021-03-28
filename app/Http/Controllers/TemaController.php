<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pagina;


class TemaController extends Controller
{

    public function show()
    {
        Pagina::contarPagina(\request()->path());
        return view('tecno.tema.show');
    }

    public function update(Request $request)
    {
        Pagina::contarPagina(\request()->path());

        $user = auth()->user();
        $user->tema = $request->input('tema');
        $user->turno = $request->input('turno');
        $user->save();
        return redirect()->route('admin.tema.show');
    }
}
