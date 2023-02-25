<?php


$conexion = mysqli_connect("sql211.epizy.com", "epiz_33667558", "PWFME3Aoh48", "epiz_33667558_login_register_db");

if ($conexion) {
    echo 'conectado exitosamente a la base de datos';
} else {
    echo 'no se a podido conectar a la base de datos';
}
