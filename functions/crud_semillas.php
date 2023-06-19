<?php

    include("conexion.php");

    if(isset($_POST["nuevaSemilla"])) {
        $codigoSemilla = $_POST["cod-semilla"];
        $stockSemilla = $_POST["stock-semilla"];
        $nombreSemilla = $_POST["nombre-semilla"];
        $tipoSemilla = $_POST["tipo-semilla"];
        $fechaIngreso = $_POST["fecha-ingreso"];
        $precioVenta = $_POST["precio-venta"];
        $precioCompra = $_POST["precio-compra"];

        if(isset($_FILES["imagen-planta"])){
            $imagenPlantaTemporal = $_FILES["imagen-planta"]["tmp_name"];
            $imagenPlantaActual = $_FILES["imagen-planta"]["name"];
            move_uploaded_file($imagenPlantaTemporal, "../assets/img/".$imagenPlantaActual);
        }

        $sql = "INSERT INTO semilla SET CODIGO_SEMILLA = '{$codigoSemilla}', STOCK_SEMILLA = {$stockSemilla}, NOMBRE_SEMILLA = '{$nombreSemilla}', TIPO_SEMILLA = '{$tipoSemilla}', FECHA_INGRESO = '{$fechaIngreso}', PRECIO_VENTA = {$precioVenta}, PRECIO_COMPRA = {$precioCompra}, IMG_PLANTA_GERMINADA = '{$imagenPlantaActual}'";

        mysqli_query($conn, $sql);

        header("Location:../listado_semillas.php?nuevaSemillaAgregada");
    }


    if (isset($_POST["semillaModificada"])) {
        $codigoSemilla = $_POST["codigo-semilla"];
        $stockSemilla = $_POST["stock-semilla"];
        $nombreSemilla = $_POST["nombre-semilla"];
        $tipoSemilla = $_POST["tipo-semilla"];
        $fechaIngreso = $_POST["fecha-ingreso"];
        $precioVenta = $_POST["precio-venta"];
        $precioCompra = $_POST["precio-compra"];
        
        if(isset($_FILES["imagen-planta"])){
            $imagenPlantaTemporal = $_FILES["imagen-planta"]["tmp_name"];
            $imagenPlantaActual = $_FILES["imagen-planta"]["name"];
            move_uploaded_file($imagenPlantaTemporal, "../assets/img/".$imagenPlantaActual);
        }

        $sql = "UPDATE semilla SET STOCK_SEMILLA = {$stockSemilla}, NOMBRE_SEMILLA = '{$nombreSemilla}', TIPO_SEMILLA = '{$tipoSemilla}', FECHA_INGRESO = '{$fechaIngreso}', PRECIO_VENTA = {$precioVenta}, PRECIO_COMPRA = {$precioCompra}, IMG_PLANTA_GERMINADA = '{$imagenPlantaActual}' WHERE CODIGO_SEMILLA = '{$codigoSemilla}'";

        mysqli_query($conn, $sql);
        header("Location:../listado_semillas.php?semillaModificada");
    }


    if (isset($_GET["eliminar"]) && isset($_GET["codigoSemilla"])) {

        $codSemilla = $_GET["codigoSemilla"];
        $sql = "DELETE FROM semilla WHERE CODIGO_SEMILLA = '{$codSemilla}'";
        mysqli_query($conn, $sql);
        header("Location:../listado_semillas.php?semillaEliminada");

    }

?>