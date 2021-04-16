<!DOCTYPE html>
<html>
<title>Reporte Almacen </title>
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
<h2>Reporte de Usuarios</h2>
<table>
    <tr>
        <th>email</th>
        <th>rol</th>

    </tr>
    @foreach($usuarios as $almacen)
        <tr>
            <td>{{$almacen->email}}</td>
            <td>{{$almacen->rol}}</td>

        </tr>
    @endforeach
</table>
</body>
</html>
