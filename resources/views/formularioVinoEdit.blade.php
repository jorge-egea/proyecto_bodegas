<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Editar Vino</title>
    <style>
form {
    max-width: 20rem;
            display: grid;
            gap: 1rem;
        }
        form > div {
    display: grid;
}
</style>
</head>
<body>
    <h1>Editar Vino</h1>
    <form method="post" action="{{ route('vinos.update', ['id' => $vino->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" required maxlength="255" value="{{ $vino->nombre }}">
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required>{{ $vino->descripcion }}</textarea>
        </div>
        <div>
            <label for="ano">Año</label>
            <input id="ano" name="ano" required pattern="\d{4}" value="{{ $vino->ano }}">
        </div>
        <div>
            <label for="porcentaje_alcohol">Porcentaje de Alcohol</label>
            <input id="porcentaje_alcohol" name="porcentaje_alcohol" type="number" required max="100" min="0" value="{{ $vino->porcentaje_alcohol }}">
        </div>
        <div>
            <label for="tipo_vino">Tipo de Vino</label>
            <select id="tipo_vino" name="tipo_vino" required>
                <option value="tinto" {{ $vino->tipo_vino == 'tinto' ? 'selected' : '' }}>Tinto</option>
                <option value="blanco" {{ $vino->tipo_vino == 'blanco' ? 'selected' : '' }}>Blanco</option>
            </select>
        </div>
        <button type="submit">Actualizar Vino</button>
    </form>
</body>
</html>
