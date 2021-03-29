@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <a href="{{route('administrador.create')}}" class="deep-purple darken-3 waves-effect waves-light btn">Registrar Administrador</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>C.I.</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var datos = [];
            @foreach($administradores as $administrador)
            var fila = [];
            fila[0] = '{{$administrador->id}}';
            fila[1] = '{{$administrador->persona->carnet_identidad}}';
            fila[2] = '{{$administrador->persona->nombre}}';
            fila[3] = '{{$administrador->persona->apellido_paterno}}';
            fila[4] = '{{$administrador->persona->apellido_materno}}';
            fila[5] = '{{$administrador->persona->telefono}}';
            fila[6] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('administrador.show', [$administrador->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('administrador.edit', [$administrador->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('administrador.destroy', [$administrador->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection
