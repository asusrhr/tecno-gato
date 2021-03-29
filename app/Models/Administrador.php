<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrador extends Model
{
    use SoftDeletes;
    protected $table = 'administradores';
    protected $fillable = ['id', 'id_persona'];


    public function persona()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }

}
