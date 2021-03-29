@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m4 l3 xl3">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('storage/'.$evento->foto)}}">
                </div>
                <div class="card-content">
                    <span class="card-title titulo">{{$evento->titulo}}</span>
                    <p class="contenido">{{$evento->descripcion}}</p>
                    <p class="contenido"><span class="bold">Fecha: </span>{{$evento->fecha_evento}}</p>
                    <p class="contenido"><span class="bold">Direccion: </span>{{$evento->direccion}}</p>
                </div>
                <div class="card-action">
                    <a href="{{route('evento.show', [$evento->id])}}">Ver</a>
                    <a href="{{route('evento.edit', [$evento->id])}}">Editar</a>
                    <a href="{{route('evento.destroy', [$evento->id])}}">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
