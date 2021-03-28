<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['id','nit','id_persona'];

    public function persona()
    {
        return $this->belongsTo('App\Persona', 'id_persona');
    }
}
