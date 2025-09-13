<?php
$user = isset($_POST["user"]) ? $_POST["user"] :null;
$pwd = isset($_POST["pwd"]) ? $_POST["pwd"] :null;

if (empty($user) || empty($pwd)) {
    echo"Ingrese el usuario o la contraseña";
}else if ($user == 'pepe' && $pwd == '12345') {
    session_start();
    $_SESSION['user'] = $user;
    echo "Sesion Inciada";
    echo'<br><a href="dashboard.php">Ir a dashboard</a>';
}else {
    echo"Sesion no iniciada";
}
?>