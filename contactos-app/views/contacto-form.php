<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactod Form</title>
</head>
<body>
    <h1>Guardar Contacto</h1>
    <br>
    <form action="operaciones/guardar-contacto.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
         <div>
            <label for="tel">Telefono</label>
            <input type="text" name="telefono" id="tel" required>
        </div>
         <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>