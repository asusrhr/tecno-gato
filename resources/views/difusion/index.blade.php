@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col">
            <a href="{{route('difusion.create')}}" class="deep-purple darken-3 waves-effect waves-light btn">Crear difusión</a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <table class="row-border table-general-elements" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th><label><input class="filled-in select-all" name="select_all" value="1" type="checkbox" /><span></span></label></th>
                    <th>Id</th>
                    <th>Evento</th>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var datos = [];
            @foreach($difusiones as $difusion)
            var fila = [];
            fila[0] = '{{$difusion->id}}';
            fila[1] = '{{$difusion->id}}';
            fila[2] = '{{$difusion->evento->titulo}}';
            fila[3] = '{{$difusion->titulo}}';
            fila[4] = '{{$difusion->fecha}}';
            fila[5] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('difusion.show', [$difusion->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('difusion.edit', [$difusion->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('difusion.destroy', [$difusion->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection
