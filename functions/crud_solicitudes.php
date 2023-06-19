<?php

    include("conexion.php");


    if (isset($_POST["nuevaSolicitud"])) {
        $fechaEntrega = $_POST["fecha-entrega"];
        $cantAlmacigos = $_POST["cant-almacigos"];
        $tipoAlmacigo = $_POST["tipo-semilla"];
        $estadoSolicitud = 1;
        
        $sql3 = "SELECT FECHA_SOLICITUD FROM solicitud";
        $result = mysqli_query($conn, $sql3);
        while ($row = mysqli_fetch_assoc($result)) {
            $fechaSolicitud = $row["FECHA_SOLICITUD"];
        }

        $dateDelivery = $fechaEntrega;
        $dateRequest = $fechaSolicitud;
        $dayRequest = intval(date('d', strtotime($dateRequest)));
        $dayDelivery = intval(date('d', strtotime($dateDelivery)));
        $prioridad = $dayRequest - $dayDelivery;
        if ($prioridad < 10){
            $prioridadSolicitud = 1; //maxima
        }  elseif ($prioridad > 10 && $prioridad < 30) {
            $prioridadSolicitud = 2;//alta
        } elseif ($prioridad > 30 && $prioridad < 60) {
            $prioridadSolicitud = 3;//normal
        } elseif ($prioridad > 60) {
            $prioridadSolicitud = 4;//baja
        }
        

        $sql2 = "SELECT * FROM semilla WHERE TIPO_SEMILLA = '{$tipoAlmacigo}'";
        $result = mysqli_query($conn, $sql2);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $fkCodSemilla = $row["CODIGO_SEMILLA"];
            $precioVenta = $row["PRECIO_VENTA"];
        }

        $total = $precioVenta * $cantAlmacigos;
        
        $sql = "INSERT INTO solicitud SET FECHA_ENTREGA = '{$fechaEntrega}', CANT_ALMACIGOS_SOLICITADOS = {$cantAlmacigos}, TIPO_ALMACIGO = '{$tipoAlmacigo}', PRECIO_VENTA_ALMACIGO = {$precioVenta}, ESTADO_ALMACIGO = {$estadoSolicitud}, PRIORIDAD_SOLICITUD = {$prioridadSolicitud}, Semilla_CODIGO_SEMILLA = '{$fkCodSemilla}', TOTAL_COMPRA = {$total}";


        mysqli_query($conn, $sql);

        header("Location:../solicitudes_enviadas.php?solicitudEnviada");

    }

    if (isset($_POST["btn-solicitud"])) {
        $estado = $_POST["estado"];
        $sql = "UPDATE solicitud SET ESTADO_ALMACIGO = {$estado}";
        mysqli_query($conn, $sql);
        header("Location:../mantenedor_solicitud.php?estadoSolicitudActualizado");
    }

?>