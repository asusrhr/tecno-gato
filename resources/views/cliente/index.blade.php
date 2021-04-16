@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <a href="{{route('cliente.create')}}" class="deep-purple darken-3 waves-effect waves-light btn">Registrar Cliente</a>
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
            @foreach($clientes as $cliente)
            var fila = [];
            fila[0] = '{{$cliente->id}}';
            fila[1] = '{{$cliente->persona->carnet_identidad}}';
            fila[2] = '{{$cliente->persona->nombre}}';
            fila[3] = '{{$cliente->persona->apellido_paterno}}';
            fila[4] = '{{$cliente->persona->apellido_materno}}';
            fila[5] = '{{$cliente->persona->telefono}}';
            fila[6] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('cliente.show', [$cliente->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('cliente.edit', [$cliente->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('cliente.destroy', [$cliente->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection
