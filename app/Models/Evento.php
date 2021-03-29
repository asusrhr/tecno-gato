<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;
    protected $table = 'eventos';
    protected $fillable = ['id','titulo','descripcion','direccion','fecha_evento','foto','id_persona'];

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
