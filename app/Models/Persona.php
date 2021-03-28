<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = ['id', 'nombre','apellido_paterno','apellido_materno','direccion',
        'carnet_identidad','fecha_nacimiento','telefono', 'tipo'];

    public function user()
    {
        return $this->hasOne('App\User', 'id_persona');
    }
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id_persona');
    }
    public function administrador()
    {
        return $this->hasOne('App\Administrador', 'id_persona');
    }
    public function correo()
    {
        return $this->hasOne('App\Correo', 'id_persona');
    }

}
