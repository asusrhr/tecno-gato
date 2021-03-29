@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('correo.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Crear un correo</span>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nombre" type="text" class="validate" name="nombre" required value="{{old('nombre')}}">
                                <label for="nombre">Nombre:</label>
                                @error('nombre')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="correo" name="correo" type="email" class="validate" required value="{{old('correo')}}">
                                <label for="correo">Correo:</label>
                                @error('correo')
                                <div style="color: red">{{$message}}</div>
                                @enderror
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
