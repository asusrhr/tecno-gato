<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busqueda extends Model
{
    use HasFactory;

    protected $table = 'busquedas';
    protected $fillable = ['titulo', 'descripcion', 'ruta'];
}
