<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administradores';
    protected $fillable = ['id', 'id_persona'];


    public function persona()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }

}
