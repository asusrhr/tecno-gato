@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m4 l3 xl3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title titulo">{{$difusion->titulo}}</span>
                    <p class="contenido">{{$difusion->descripcion}}</p>
                    <p class="contenido"><span class="bold black-text">Fecha: </span>{{$difusion->fecha}}</p>
                    <p class="contenido"><span class="bold black-text">Evento: </span>{{$difusion->evento->direccion}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m8 l9 xl9">
            <div class="row">
                <div class="col">
                    <a href="{{route('difusion.correo.create', [$difusion->id])}}" class="deep-purple darken-3 waves-effect waves-light btn">Agregar correo</a>
                    <a href="#" class="deep-purple darken-3 waves-effect waves-light btn">Enviar difusión</a>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <table class="row-border table-general-elements" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th><label><input class="filled-in select-all" name="select_all" value="1" type="checkbox" /><span></span></label></th>
                            <th>Id</th>
                            <th>Título</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var datos = [];
            @foreach($difusion->difusion_correos as $dc)
            var fila = [];
            fila[0] = '{{$dc->correo->id}}';
            fila[1] = '{{$dc->correo->id}}';
            fila[2] = '{{$dc->correo->nombre}}';
            fila[3] = '{{$dc->correo->correo}}';
            fila[4] = '<div>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('difusion.correo.destroy', [$difusion->id, $dc->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>

@endsection
