<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    protected $table = 'correos';
    protected $fillable = ['id','nombre','correo','id_persona'];

    public function persona()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }
}
