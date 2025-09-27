<?php
require __DIR__ ."/../../controllers/contactos-controller.php";

use App\Controllers\ContactosController;

$contactosController = new ContactosController();

$result = $contactosController->updateContacto($_POST);

if ($result) {
    header("Location: ../contactos.php"); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error al actualizar</title>
</head>
<body>
    <h1>Error al actualizar los datos</h1>
    <br>
    <a href="../contactos.php">Volver a Contactos</a>
</body>
</html>