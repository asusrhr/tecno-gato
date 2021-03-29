@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 l8 xl8 offset-m1 offset-l2 offset-xl2">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Nombre:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$correo->nombre}}</p>
                        </div>
                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Correo:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$correo->correo}}</p>
                        </div>

                    </div>
                    <div class="card-action cancel-primary-color">
                        <a href="{{route('correo.index')}}" class="btn deep-purple darken-3 waves-effect waves-light" type="submit">aceptar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
