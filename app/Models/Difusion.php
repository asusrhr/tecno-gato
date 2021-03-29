<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Difusion extends Model
{
    use SoftDeletes;
    protected $table = 'difusiones';
    protected $fillable = ['id','titulo','descripcion','fecha','id_evento'];

    public function evento()
    {
        return $this->belongsTo('App\Models\Evento', 'id_evento');
    }
}
