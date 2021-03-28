<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difusion extends Model
{
    protected $table = 'difusiones';
    protected $fillable = ['id','titulo','descripcion','fecha','id_evento'];

    public function eventos()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }
}
