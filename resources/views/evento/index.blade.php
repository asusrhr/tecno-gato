@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col">
            <a href="{{route('evento.create')}}" class="deep-purple darken-3 waves-effect waves-light btn">Crear Evento</a>
        </div>
    </div>
    <div class="row">
        @foreach($eventos as $evento)
            <div class="col s12 m6 l4 xl3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('storage/'.$evento->foto)}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title titulo">{{$evento->titulo}}</span>
                        <p class="contenido">{{$evento->fecha_evento}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{route('evento.show', [$evento->id])}}">Ver</a>
                        <a href="{{route('evento.edit', [$evento->id])}}">Editar</a>
                        <a href="{{route('evento.destroy', [$evento->id])}}">Eliminar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
