<!DOCTYPE html>
<html>
<title>Reporte Evento </title>
<head>
    <style>
        table{
            font-family:arial,sans-serif;
            border-collapse:collapse;
            width:100%;
        }
        td,th{
            border:1px solid #dddddd;
            text-align: left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:#dddddd;
        }
    </style>
</head>
<body>
<h2>Reporte de Evento</h2>
<table>
    <tr>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha </th>
        <th>Direccion</th>

    </tr>
    @foreach($eventos as $evento)
        <tr>
            <td>{{$evento->titulo}}</td>
            <td>{{$evento->descripcion}}</td>
            <td>{{$evento->fecha_evento}}</td>
            <td>{{$evento->direccion}}</td>

        </tr>
    @endforeach
</table>
</body>
</html>
