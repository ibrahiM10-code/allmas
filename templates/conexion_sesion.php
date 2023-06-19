<?php
    include("./functions/conexion.php");
    if (!$_SESSION["rutUsuario"]) {
        header("Location:./index.php?falloConexion");
    }
?>