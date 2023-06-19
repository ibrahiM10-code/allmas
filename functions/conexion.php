<?php

    session_start();

    $db_usuario = "root";
    $db_clave = "";
    $db_server = "localhost";
    $db_nombre = "allmasdb";

    $conn = mysqli_connect($db_server, $db_usuario, $db_clave, $db_nombre);

    if(!$conn) {
        echo "Error en la conexion";
    }

?>