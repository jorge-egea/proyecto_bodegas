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
<form method="POST" action="{{route('bodega.store')}}">
    @csrf
    <div>
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" required maxlength="255">
    </div>
    <div>
        <label for="email">Correo electrónico</label>
        <input id="email" name="email" type="email" required maxlength="255">
    </div>
    <div>
        <label for="direccion">Dirección</label>
        <input id="direccion" name="direccion" required maxlength="255">
    </div>
    <div>
        <label for="telefono">Número de teléfono</label>
        <input id="telefono" name="telefono" type="tel" required max="20">
    </div>
    <div>
        <label for="persona_contacto">Persona de contacto</label>
        <input id="persona_contacto" name="persona_contacto" required maxlength="255">
    </div>
    <div>
        <label for="ano_fundacion">Año de fundación</label>
        <input id="ano_fundacion" name="ano_fundacion" required pattern="\d{4}">
    </div>
    <div>
        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion"></textarea>
    </div>
    <fieldset>
        <legend>¿Dispone de restaurante?</legend>
        <div>
            <input id="restaurante_si" type="radio" name="restaurante" value="1" required>
            <label for="restaurante_si">Sí</label>
        </div>
        <div>
            <input id="restaurante_no" type="radio" name="restaurante" value="0" required>
            <label for="restaurante_no">No</label>
        </div>
    </fieldset>
    <fieldset>
        <legend>¿Dispone de hotel?</legend>
        <div>
            <input id="hotel_si" type="radio" name="hotel" value="1" required>
            <label for="hotel_si">Sí</label>
        </div>
        <div>
            <input id="hotel_no" type="radio" name="hotel" value="0" required>
            <label for="hotel_no">No</label>
        </div>
    </fieldset>
    <button type="submit">Registrar bodega</button>
</form>
</body>
</html>
