<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;
    protected $table = 'personas';
    protected $fillable = ['id', 'nombre','apellido_paterno','apellido_materno','direccion',
        'carnet_identidad','fecha_nacimiento','telefono', 'tipo'];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id_persona');
    }

    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_persona');
    }
    public function administrador()
    {
        return $this->hasOne('App\Models\Administrador', 'id_persona');
    }
    public function eventos()
    {
        return $this->hasMany('App\Models\Evento', 'id_persona');
    }
    public function correos()
    {
        return $this->hasMany('App\Models\Correo', 'id_persona');
    }

}
