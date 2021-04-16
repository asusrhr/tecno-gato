@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('difusion.update', [$difusion->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-content">
                        <span class="card-title titulo text_color">Editar una difusión</span>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" oninvalid="setCustomValidity('Ingresa un titulo valido')" oninput="setCustomValidity('')" required value="{{$difusion->titulo}}">
                                <label for="titulo">Título del evento</label>
                                @error('titulo')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="descripcion" class="materialize-textarea" name="descripcion" oninvalid="setCustomValidity('Ingresa una descripcion valida')" oninput="setCustomValidity('')" required>{{$difusion->descripcion}}</textarea>
                                <label for="descripcion">Descripción del evento</label>
                                @error('descripcion')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <label for="fecha">Fecha de la difusión</label>
                                <input id="fecha" name="fecha" type="text" class="datepicker" oninvalid="setCustomValidity('Ingresa una fecha valida')" oninput="setCustomValidity('')" required value="{{$difusion->fecha}}">
                                @error('fecha')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-field col s12 m6">
                                <select name="id_evento" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($eventos as $evento)
                                        <option value="{{$evento->id}}" {{$difusion->id_evento == $evento->id ? 'selected':''}}>{{$evento->titulo}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione un evento</label>
                            </div>
                        </div>

                        <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">Guardar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
