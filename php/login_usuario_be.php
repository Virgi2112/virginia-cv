<?php

session_start();

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' 
AND contrasena = '$contrasena'");

echo $usuario;

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $usuario;
    header("location: curriculum.php");
    exit();
} else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit();
};
