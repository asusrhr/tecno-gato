@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title titulo">Configuración de tema</span>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <select class="icons">
                                <option value="" disabled selected>Escoja una opción</option>
                                <option value="" data-icon="{{asset('images/ico_negro.png')}}">noche</option>
                                <option value="" data-icon="{{asset('images/ico_blanco.png')}}">día</option>
                                <option value="" data-icon="{{asset('images/ico_children.png')}}">niño</option>
                                <option value="" data-icon="{{asset('images/ico_young.png')}}">joven</option>
                                <option value="" data-icon="{{asset('images/ico_adult.png')}}">adulto</option>
                            </select>
                            <label>Seleccione un tema</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
