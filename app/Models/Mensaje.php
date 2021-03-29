<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensaje extends Model
{
    use SoftDeletes;
    protected $table = 'mensajes';
    protected $fillable = ['id','asunto','descripcion','fecha','leido','id_evento'];

    public function eventos()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }

}
