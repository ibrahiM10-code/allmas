<?php 
    
    include("conexion.php");

    // Ingreso de datos del nuevo cliente.

    if(isset($_POST["nuevoCliente"])) {

        $rutEmpresa = $_POST["rut-empresa"];
        $nombreEmpresa = $_POST["nombre-empresa"];
        $telefonoEmpresa = $_POST["nro-telefono-empresa"];
        $giroEmpresa = $_POST["giro-empresa"];
        // $logoEmpresa = $_POST["logo-empresa"];

        if(isset($_FILES['logo-empresa'])){
            $logoEmpresaTemporal = $_FILES['logo-empresa']['tmp_name'];
            $logoEmpresaActual = $_FILES['logo-empresa']['name'];
            move_uploaded_file($logoEmpresaTemporal, "../assets/img/".$logoEmpresaActual);
        }

        $nombreFunc = $_POST["nombre-func"];
        $rutFunc = $_POST["rut-func"];
        $telefonoFunc = $_POST["nro-telefono-func"];
        $emailFunc = $_POST["email-func"];
        $claveFunc = $_POST["clave-func"];
        // $fotoFunc = $_POST["foto-perfil-func"];

        if(isset($_FILES['foto-perfil-func'])){
            $fotoFuncionarioTemporal = $_FILES['foto-perfil-func']['tmp_name'];
            $fotoFuncionarioActual = $_FILES['foto-perfil-func']['name'];
            move_uploaded_file($fotoFuncionarioTemporal, "../assets/img/".$fotoFuncionarioActual);
        }

        $sql = "INSERT INTO cliente SET RUT_EMPRESA = '{$rutEmpresa}', NOMBRE_EMPRESA = '{$nombreEmpresa}', TELEFONO_EMPRESA = '{$telefonoEmpresa}', GIRO = '{$giroEmpresa}', LOGO_EMPRESA = '{$logoEmpresaActual}', NOMBRE_FUNC_EMPRESA = '{$nombreFunc}', RUT_FUNC_EMPRESA = '{$rutFunc}', TELEFONO_FUNC_EMPRESA = '{$telefonoFunc}', CORREO_FUNC_EMPRESA = '{$emailFunc}', CLAVE_FUNC_EMPRESA = '{$claveFunc}', FOTO_PERFIL_FUNC_EMPRESA = '{$fotoFuncionarioActual}'";

        mysqli_query($conn, $sql);

        header("Location:../listado_clientes.php?nuevoClienteAgregado");

    }

    // Modificacion de datos de la empresa.
    if (isset($_POST["empresaModificada"])) {
        $rutEmpresa = $_POST["rut-empresa"];
        $nombreEmpresa = $_POST["nombre-empresa"];
        $telefonoEmpresa = $_POST["nro-telefono-empresa"];
        $giroEmpresa = $_POST["giro-empresa"];
        
        if(isset($_FILES['logo-empresa'])){
            $logoEmpresaTemporal = $_FILES['logo-empresa']['tmp_name'];
            $logoEmpresaActual = $_FILES['logo-empresa']['name'];
            move_uploaded_file($logoEmpresaTemporal, "../assets/img/".$logoEmpresaActual);
        }

        $sql = "UPDATE cliente SET NOMBRE_EMPRESA = '{$nombreEmpresa}', TELEFONO_EMPRESA = '{$telefonoEmpresa}', GIRO = '{$giroEmpresa}', LOGO_EMPRESA = '{$logoEmpresaActual}' WHERE RUT_EMPRESA = '{$rutEmpresa}'";

        mysqli_query($conn, $sql);
        header("Location:../listado_clientes.php?empresaModificada");
    }

    // Modificacion de datos del funcionario.
    if (isset($_POST["clienteModificado"])) {
        $nombreFunc = $_POST["nombre-func"];
        $rutFunc = $_POST["rut-func"];
        $telefonoFunc = $_POST["nro-telefono-func"];
        $emailFunc = $_POST["email-func"];
        $claveFunc = $_POST["clave-func"];
        
        if(isset($_FILES['foto-perfil-func'])){
            $fotoFuncionarioTemporal = $_FILES['foto-perfil-func']['tmp_name'];
            $fotoFuncionarioActual = $_FILES['foto-perfil-func']['name'];
            move_uploaded_file($fotoFuncionarioTemporal, "../assets/img/".$fotoFuncionarioActual);
        }
        
        $sql = "UPDATE cliente SET NOMBRE_FUNC_EMPRESA = '{$nombreFunc}', TELEFONO_FUNC_EMPRESA = '{$telefonoFunc}', CORREO_FUNC_EMPRESA = '{$emailFunc}', CLAVE_FUNC_EMPRESA = '{$claveFunc}', FOTO_PERFIL_FUNC_EMPRESA = '{$fotoFuncionarioActual}' WHERE RUT_FUNC_EMPRESA = '{$rutFunc}'";

        mysqli_query($conn, $sql);
        header("Location:../listado_clientes.php?clienteModificado");
    }


    // Eliminar Empresa y Funcionario.
    if (isset($_GET["eliminar"]) && isset($_GET["rutEmpresa"])) {
        $rutEmpresa = $_GET["rutEmpresa"];
        $sql = "DELETE FROM cliente WHERE RUT_EMPRESA = '{$rutEmpresa}'";
        mysqli_query($conn, $sql);
        header("Location:../listado_clientes.php?datosEliminados");
    } elseif (isset($_GET["eliminar"]) && isset($_GET["rutFuncionario"])) {
        $rutFunc = $_GET["rutFuncionario"];
        $sql = "DELETE FROM cliente WHERE RUT_FUNC_EMPRESA = '{$rutFunc}'";
        mysqli_query($conn, $sql);
        header("Location:../listado_clientes.php?datosEliminados");
     }

?>