<?php 

    include("conexion.php");

    if (isset($_POST["nuevoUsuario"])) {
        $rutUsuario = $_POST["rut-usuario"];
        $nombreUsuario = $_POST["nombre-usuario"];
        $apellidoPaterno = $_POST["apellido-paterno"];
        $apellidoMaterno = $_POST["apellido-materno"];
        $fechaNacimiento = $_POST["fecha-nacimiento"];
        $correoUsuario = $_POST["correo-usuario"];
        $claveUsuario = $_POST["clave-usuario"];
        $tipoUsuario = $_POST["tipo-usuario"];
        $fotoPerfil = "";

        $sql = "INSERT INTO usuario SET RUT_USUARIO = '{$rutUsuario}', NOMBRE_USUARIO = '{$nombreUsuario}', APELLIDO_PATERNO_USUARIO = '{$apellidoPaterno}', APELLIDO_MATERNO_USUARIO = '{$apellidoMaterno}', FECHA_NACIMIENTO_USUARIO = '{$fechaNacimiento}', CORREO_USUARIO = '{$correoUsuario}', CLAVE_USUARIO = '{$claveUsuario}', TIPO_USUARIO = '{$tipoUsuario}', FOTO_PERFIL_USUARIO = '{$fotoPerfil}'";


        mysqli_query($conn, $sql);
    }

?>