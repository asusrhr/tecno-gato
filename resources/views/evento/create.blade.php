@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('evento.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Crear un evento</span>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" oninvalid="setCustomValidity('Ingresa un titulo valido')" oninput="setCustomValidity('')" required value="{{old('titulo')}}">
                                <label for="titulo">Título del evento</label>
                                @error('titulo')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="descripcion" class="materialize-textarea" name="descripcion" oninvalid="setCustomValidity('Ingresa una descripcion valida')" oninput="setCustomValidity('')" required>{{old('descripcion')}}</textarea>
                                <label for="descripcion">Descripción del evento</label>
                                @error('descripcion')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="direccion" type="text" class="validate" name="direccion" oninvalid="setCustomValidity('Ingresa una direccion valida')" oninput="setCustomValidity('')" required value="{{old('direccion')}}">
                                <label for="direccion">Dirección del evento</label>
                                @error('direccion')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="input-field col s6">
                                <label for="fecha_evento">Fecha del evento</label>
                                <input id="fecha_evento" name="fecha_evento" type="text" class="datepicker" oninvalid="setCustomValidity('Ingresa una fecha valida')" oninput="setCustomValidity('')" required value="{{old('fecha_evento')}}">
                                @error('fecha_evento')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Foto</span>
                                    <input type="file" name="foto" oninvalid="setCustomValidity('Ingresa una foto valida')" oninput="setCustomValidity('')" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    @error('foto')
                                    <div style="color: red">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button id="submit" class="btn deep-purple darken-3 waves-effect waves-light" type="submit">Guardar
                        </button>
                    </div>

                </form>
            </div>
        </div>


    </div>
@endsection
