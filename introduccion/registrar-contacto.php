<?php
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["correo"];

$hostDb = "localhost";
$userDb = "root";
$pwdDb = "";
$nameDB = "grupo_1_avanzada";

$conexDb = new mysqli(
    $hostDb, 
    $userDb, 
    $pwdDb, 
    $nameDB);

if ($conexDb->connect_error) {
    die("DB Error: ". $conexDb->connect_error);
}

$sql = "insert into contactos (nombre, telefono, email)values";
$sql .= "('$nombre', '$telefono', '$email')";

$result = $conexDb->query($sql);
$conexDb->close();

if ($result) {
    header("Location: index.php");
}else{
    echo "Error al guardar";
}


?>