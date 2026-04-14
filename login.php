<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['usuario'] = $usuario;
        echo "Login exitoso. Bienvenido, $usuario";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
