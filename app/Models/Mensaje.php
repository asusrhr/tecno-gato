<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'mensajes';
    protected $fillable = ['id','asunto','descripcion','fecha','leido','id_evento'];

    public function eventos()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }

}