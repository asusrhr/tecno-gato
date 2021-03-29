@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m4 l3 xl3">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('storage/'.$evento->foto)}}">
                </div>
                <div class="card-content">
                    <span class="card-title titulo">{{$evento->titulo}}</span>
                    <p class="contenido">{{$evento->descripcion}}</p>
                    <p class="contenido"><span class="bold black-text">Fecha: </span>{{$evento->fecha_evento}}</p>
                    <p class="contenido"><span class="bold black-text">Direccion: </span>{{$evento->direccion}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m8 l9 xl9">
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
            @foreach($evento->difusiones as $difusion)
            var fila = [];
            fila[0] = '{{$difusion->id}}';
            fila[1] = '{{$difusion->id}}';
            fila[2] = '{{$difusion->titulo}}';
            fila[3] = '{{$difusion->fecha}}';
            fila[4] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('difusion.show', [$difusion->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>

@endsection
