<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function reporte_usuario(){

        $usuarios = User::all();
        $view=view('vista-pdf', compact('usuarios'))->render();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('archivo'.'.pdf');

    }
    public function reporte_difusiones(){

        $usuarios = User::all();
        $view=view('vista-pdf', compact('usuarios'))->render();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('archivo'.'.pdf');

    }
    public function reporte_evento(){

        $eventos= Evento::all();
        $view=view('evento-pdf', compact('eventos'))->render();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('archivo'.'.pdf');

    }
}
