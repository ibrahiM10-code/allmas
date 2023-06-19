<?php

    include("conexion.php");

    if (isset($_POST["login-btn"])) {
        $rut = $_POST['rutUsuario'];
        $clave = $_POST['claveUsuario'];
        $tipo = $_POST['tipoUsuario'];

        $sql = "SELECT RUT_USUARIO, CLAVE_USUARIO, TIPO_USUARIO, NOMBRE_USUARIO FROM usuario WHERE RUT_USUARIO = '{$rut}' AND CLAVE_USUARIO = '{$clave}' AND TIPO_USUARIO = {$tipo}";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $nombreUsuario = $row["NOMBRE_USUARIO"];
                $tipoUsuario = $row["TIPO_USUARIO"];
                $rutUsuario = $row["RUT_USUARIO"];
                $_SESSION["rutUsuario"] = $rutUsuario;
                $_SESSION["nombreUsuario"] = $nombreUsuario;
                $_SESSION["tipoUsuario"] = $tipoUsuario;
            }
            header("Location:../index.php");
        } else {
            header("Location:../login.php?errorDeIngreso");
        }
    }

?>