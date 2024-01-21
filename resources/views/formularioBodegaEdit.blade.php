<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bodega</title>
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
<h1>Añadir bodega</h1>
<form method="post" action="{{ route('bodega.update', ["id" => $bodega->id]) }}">
    @csrf
    @method("PUT")
    <div>
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" required maxlength="255" value="{{ old('nombre', $bodega->nombre) }}">
    </div>
    <div>
        <label for="email">Correo electrónico</label>
        <input id="email" name="email" type="email" required maxlength="255" value="{{ old('email', $bodega->email) }}">
    </div>
    <div>
        <label for="direccion">Dirección</label>
        <input id="direccion" name="direccion" required maxlength="255" value="{{ old('direccion', $bodega->direccion) }}">
    </div>
    <div>
        <label for="telefono">Número de teléfono</label>
        <input id="telefono" name="telefono" type="tel" required max="20" value="{{ old('telefono', $bodega->telefono) }}">
    </div>
    <div>
        <label for="persona_contacto">Persona de contacto</label>
        <input id="persona_contacto" name="persona_contacto" required maxlength="255" value="{{ old('persona_contacto', $bodega->persona_contacto) }}">
    </div>
    <div>
        <label for="ano_fundacion">Año de fundación</label>
        <input id="ano_fundacion" name="ano_fundacion" required pattern="\d{4}" value="{{ old('ano_fundacion', $bodega->ano_fundacion) }}">
    </div>
    <div>
        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion">{{ old('descripcion', $bodega->descripcion) }}</textarea>
    </div>
    <fieldset>
        <legend>¿Dispone de restaurante?</legend>
        <div>
            <input id="restaurante_si" type="radio" name="restaurante" value="1" required {{ old('restaurante', $bodega->restaurante) == '1' ? 'checked' : '' }}>
            <label for="restaurante_si">Sí</label>
        </div>
        <div>
            <input id="restaurante_no" type="radio" name="restaurante" value="0" required {{ old('restaurante', $bodega->restaurante) == '0' ? 'checked' : '' }}>
            <label for="restaurante_no">No</label>
        </div>
    </fieldset>
    <fieldset>
        <legend>¿Dispone de hotel?</legend>
        <div>
            <input id="hotel_si" type="radio" name="hotel" value="1" required {{ old('hotel', $bodega->hotel) == '1' ? 'checked' : '' }}>
            <label for="hotel_si">Sí</label>
        </div>
        <div>
            <input id="hotel_no" type="radio" name="hotel" value="0" required {{ old('hotel', $bodega->hotel) == '0' ? 'checked' : '' }}>
            <label for="hotel_no">No</label>
        </div>
    </fieldset>
    <button type="submit">Registrar bodega</button>
</form>
</body>
</html>
