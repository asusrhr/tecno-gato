@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <a href="{{route('correo.create')}}" class="deep-purple darken-3 waves-effect waves-light btn">Registrar Correo</a>
    </div>
    <div class="row">
        <div class="card">
            <table class="row-border table-general-elements" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th><label><input class="filled-in select-all" name="select_all" value="1" type="checkbox" /><span></span></label></th>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
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
            @foreach($correos as $correo)
            var fila = [];
            fila[0] = '{{$correo->id}}';
            fila[1] = '{{$correo->id}}';
            fila[2] = '{{$correo->nombre}}';
            fila[3] = '{{$correo->correo}}';
            fila[4] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('correo.show', [$correo->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('correo.edit', [$correo->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('correo.destroy', [$correo->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection
