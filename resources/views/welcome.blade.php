<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bodegas</title>
    <style>
        table {
            text-align: center;
            border-collapse: collapse;
        }

        table td {
            padding: 1em;
        }

        table tbody tr:nth-child(even) {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
<h1>Bodega manager</h1>
<a href="{{route('bodega.create')}}">Crear bodega</a>
<hr>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bodegas as $bodega)
        <tr>
            <td>{{ $bodega->nombre }}</td>
            <td>{{ $bodega->direccion }}</td>
            <td>{{ $bodega->telefono }}</td>
            <td>{{ $bodega->email }}</td>
            <td>
                <a href="{{route('bodega.show', ['id' =>$bodega->id])}}">Ver</a>
                <form action="{{ route('bodega.destroy', ['id' => $bodega->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
