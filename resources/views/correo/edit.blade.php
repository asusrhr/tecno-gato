@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3">
            <form action="{{route('correo.update',[$correo->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Editar Correo</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nombre" type="text" class="validate" name="nombre" oninvalid="setCustomValidity('Ingresa un titulo valido')" oninput="setCustomValidity('')" required value="{{$correo->nombre}}">
                                <label for="nombre">Nombre:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="correo" name="correo" type="email" class="validate" oninvalid="setCustomValidity('Ingresa un correo valido')" oninput="setCustomValidity('')" required value="{{$correo->correo}}">
                                <label for="correo">Correo:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('correo.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>

                                    <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">actualizar</button>
                            </div>
                        </div>

                    </div>
                </div>

            </form>


        </div>
    </div>
@endsection
