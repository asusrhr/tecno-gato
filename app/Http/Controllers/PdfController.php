<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function download()
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML('<h1>Styde.net</h1>');

        return $pdf->download('mi-archivo.pdf');
    }

        public function download1()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];

        $pdf = \PDF::loadView('vista-pdf', $data);

        return $pdf->download('archivo.pdf');
    }
}
