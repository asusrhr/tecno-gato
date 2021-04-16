@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">

            <form action="{{route('administrador.update',[$administrador->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Editar Administrador</span>
                        <div class="row">

                            <div class="input-field col s6">
                                <input  id="nombre" name="nombre" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un nombre valido')" oninput="setCustomValidity('')" required value="{{$administrador->persona->nombre}}">
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="apellido_paterno" name="apellido_paterno" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un apellido paterno valido')" oninput="setCustomValidity('')" required value="{{$administrador->persona->apellido_paterno}}">
                                <label for="apellido_paterno">Apellido Paterno :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="apellido_materno" name="apellido_materno" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un apellido materno valido')" oninput="setCustomValidity('')" required value="{{$administrador->persona->apellido_materno}}">
                                <label for="apellido_materno">Apellido Materno :</label>
                            </div>

                            <div class="input-field col s6">
                                <input  id="carnet_identidad" name="carnet_identidad" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un carnet valido')" oninput="setCustomValidity('')" required value="{{$administrador->persona->carnet_identidad}}">
                                <label for="carnet_identidad">Carnet de Identidad :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="direccion" name="direccion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa una direccion valida')" oninput="setCustomValidity('')" required value="{{$administrador->persona->direccion}}">
                                <label for="direccion">Direccion :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="datepicker" oninvalid="setCustomValidity('Ingresa una fecha valida')" oninput="setCustomValidity('')" required value="{{$administrador->persona->fecha_nacimiento}}">
                                <label for="fecha_nacimiento">Fecha de Nacimiento :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="telefono" name="telefono" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un telefono valido')" oninput="setCustomValidity('')" required value="{{$administrador->persona->telefono}}">
                                <label for="telefono">Telefono :</label>
                            </div>

                            <div class="col s12 input-field">
                                <input id="email" name="email" type="email" class="validate" oninvalid="setCustomValidity('Ingresa un correo valido')" oninput="setCustomValidity('')" required value="{{$administrador->persona->user->email}}">
                                <label for="email">Correo:</label>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('administrador.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>

                                <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">actualizar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
