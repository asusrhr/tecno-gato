@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('evento.update', [$evento->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-content">
                        <span class="card-title titulo text_color">Editar un evento</span>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required value="{{$evento->titulo}}">
                                <label for="titulo">Título del evento</label>
                                @error('titulo')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="descripcion" class="materialize-textarea" name="descripcion" required>{{$evento->descripcion}}</textarea>
                                <label for="descripcion">Descripción del evento</label>
                                @error('descripcion')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="direccion" type="text" class="validate" name="direccion" required value="{{$evento->direccion}}">
                                <label for="direccion">Dirección del evento</label>
                                @error('direccion')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-field col s6">
                                <label for="fecha_evento">Fecha del evento</label>
                                <input id="fecha_evento" name="fecha_evento" type="text" class="datepicker" required value="{{$evento->fecha_evento}}">
                                @error('fecha_evento')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Foto</span>
                                    <input type="file" name="foto">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    @error('foto')
                                    <div style="color: red">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">Modificar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
