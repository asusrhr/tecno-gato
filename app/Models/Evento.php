<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable = ['id','titulo','descripcion','direccion','fecha_evento','foto','tipo','id_persona'];

    public function persona()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }
    public function difusiones()
    {
        return $this->hasMany('App\Difusion','id_evento');
    }
    public function mensajes()
    {
        return $this->hasMany('App\Mensajes','id_evento');
    }
}
