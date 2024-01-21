<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Vino Details</title>
</head>
<body>
<h1>Detalles del Vino</h1>
<p>ID: {{ $vino->id }}</p>
<p>Nombre: {{ $vino->nombre }}</p>
<p>Descripción: {{ $vino->descripcion }}</p>
<p>Año: {{ $vino->ano }}</p>
<p>Porcentaje de Alcohol: {{ $vino->porcentaje_alcohol }}</p>
<p>Tipo de Vino: {{ $vino->tipo_vino }}</p>
<p>Bodega ID: {{ $vino->bodega_id }}</p>
<p>Fecha de Creación: {{ $vino->created_at }}</p>
<p>Fecha de Actualización: {{ $vino->updated_at }}</p>

<a href="{{ route('index') }}">Volver</a>
<a href="{{ route('vinos.edit', ['id' => $vino->id]) }}">Editar</a>
</body>
</html>
