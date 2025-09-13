<?php
session_start();
if (isset($_SESSION["user"])){
header('Location: index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio_Dashboard</title>
    <link rel="stylesheet" href="css/botones.css">
</head>
<body>
    <h1>Hola <?php echo $_SESSION['user'];?></h1>
    <br>
    <br>
    <a href="cerrar_sesion.php" class="btn">Cerrar sesion</a>

</body>
</html>