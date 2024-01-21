<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bodega</title>
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
<a href="{{route('index')}}">Volver</a>
<a href="{{route('bodega.edit', ["id" => $bodega->id])}}">Editar</a>
<h1>Detalle de bodega</h1>
<p>ID: {{ $bodega->id }}</p>
<p>Nombre: {{ $bodega->nombre }}</p>
<p>Email: {{ $bodega->email }}</p>
<p>Teléfono: {{ $bodega->telefono }}</p>
<p>Dirección: {{ $bodega->direccion }}</p>
<p>Persona de contacto: {{ $bodega->persona_contacto }}</p>
<p>Año de fundación: {{ $bodega->ano_fundacion }}</p>
<p>Descripción: {{ $bodega->descripcion }}</p>
<p>Restaurante: {{ $bodega->restaurante ? 'Sí' : 'No' }}</p>
<p>Hotel: {{ $bodega->hotel ? 'Sí' : 'No' }}</p>
<a href="{{route('vinos.create', ["id" => $bodega->id])}}">Añadir vino a la bodega</a>
<h2>Vinos relacionados</h2>
@if(count($vinos) > 0)
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Año</th>
            <th>Porcentaje Alcohol</th>
            <th>Tipo Vino</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vinos as $vino)
            <tr>
                <td>{{ $vino->nombre }}</td>
                <td>{{ $vino->descripcion }}</td>
                <td>{{ $vino->ano }}</td>
                <td>{{ $vino->porcentaje_alcohol }}</td>
                <td>{{ $vino->tipo_vino }}</td>
                <td>
                    <a href="{{route('vinos.show', ['id' =>$vino->id])}}">Ver</a>
                    <form action="{{ route('vinos.destroy', ["bodegaId" => $bodega->id, 'id' => $vino->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No hay vinos relacionados.</p>
@endif
</body>
</html>
