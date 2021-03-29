<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DifusionCorreo extends Model
{
    use SoftDeletes;
    protected $table = 'difusiones_correos';
    protected $fillable = ['id','id_correo','id_difusion'];

    public function correo()
    {
        return $this->belongsTo('App\Correo', 'id_correo');
    }
    public function difusion()
    {
        return $this->belongsTo('App\Difusion', 'id_difusion');
    }
}
