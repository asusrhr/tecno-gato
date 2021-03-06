@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3">
            <div class="card card_color">
                <form action="{{route('correo.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title titulo text_color">Crear un correo</span>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nombre" type="text" class="validate" name="nombre" oninvalid="setCustomValidity('Ingresa un nombre valido')" oninput="setCustomValidity('')" required value="{{old('nombre')}}">
                                <label for="nombre">Nombre:</label>
                                @error('nombre')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="correo" name="correo" type="email" class="validate" oninvalid="setCustomValidity('Ingresa un correo valido')" oninput="setCustomValidity('')" required value="{{old('correo')}}">
                                <label for="correo">Correo:</label>
                                @error('correo')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('correo.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
                                <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">Guardar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
