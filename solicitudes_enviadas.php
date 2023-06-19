<?php include("templates/conexion_sesion.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>AllMas | Solicitudes Realizadas</title>
</head>

<body>

    <?php include("templates/nav.php");?>
    <main>
        <form action="functions/crud_solicitudes.php" method="post">
            <div class="container mt-5">
                <?php if(isset($_GET["solicitudEnviada"])):?>
                <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
                    Solicitud enviada!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif;?>

                <table class="table table-bordered table-hover">
                    <thead>
                        <th>Codigo de Solicitud</th>
                        <th>Fecha de Solicitud</th>
                        <th>Fecha de Entrega</th>
                        <th>Cantidad de Almácigos pedidos</th>
                        <th>Tipo de Almácigo</th>
                        <th>Precio de venta</th>
                        <th>Total de compra</th>
                        <th>Estado de Solicitud</th>
                        <th>Prioridad</th>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM solicitud";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $codSolicitud = $row["CODIGO_SOLICITUD"];
                                    $fechaSolicitud = $row["FECHA_SOLICITUD"];
                                    $fechaEntrega = $row["FECHA_ENTREGA"];
                                    $cantAlmacigos = $row["CANT_ALMACIGOS_SOLICITADOS"];
                                    $tipoAlmacigo = $row["TIPO_ALMACIGO"];
                                    $precioVenta = $row["PRECIO_VENTA_ALMACIGO"];
                                    $estadoSolicitud = $row["ESTADO_ALMACIGO"];
                                    $prioridadSolicitud = $row["PRIORIDAD_SOLICITUD"];
                                    $totalDeCompra = $row["TOTAL_COMPRA"];

                                    switch ($estadoSolicitud) {
                                        case 1:
                                            $estadoSolicitud = "En revision";
                                            break;
                                        case 2:
                                            $estadoSolicitud = "Aceptada";
                                            break;
                                        case 3:
                                            $estadoSolicitud = "Rechazada";
                                            break;
                                        default:
                                            break;
                                    }

                                    switch($prioridadSolicitud) {
                                        case 1:
                                            $prioridadSolicitud = "Maxima";
                                            break;
                                        case 2:
                                            $prioridadSolicitud = "Alta";
                                            break;
                                        case 3:
                                            $prioridadSolicitud = "Normal";
                                            break;
                                        case 4:
                                            $prioridadSolicitud = "Baja";
                                            break;
                                        default:
                                            break;
                                    }
                        ?>

                        <tr>
                            <td><?php echo $codSolicitud ?></td>
                            <td><?php echo $fechaSolicitud ?></td>
                            <td><?php echo $fechaEntrega ?></td>
                            <td><?php echo $cantAlmacigos ?></td>
                            <td><?php echo $tipoAlmacigo ?></td>
                            <td>$<?php echo $precioVenta ?></td>
                            <td>$<?php echo $totalDeCompra ?></td>
                            <td><?php if(isset($_SESSION["tipoUsuario"]) == 10 || isset($_SESSION["tipoUsuario"]) != 1 || isset($_SESSION["tipoUsuario"]) != 2):?>
                                <select name="estado">
                                    <option value="1">En revision</option>
                                    <option value="2">Aceptada</option>
                                    <option value="3">Rechazada</option>
                                </select>
                                <?php endif;?>
                                <?php echo $estadoSolicitud?>
                            </td>
                            <td><?php echo $prioridadSolicitud ?></td>
                        </tr>
                        <?php }?>
                        <?php }?>
                    </tbody>
                </table>
                <button <?php if($_SESSION["tipoUsuario"] == 3){echo "disabled=disabled";}?> type="submit"
                    class="btn btn-success" name="btn-solicitud">Actualizar Estado</button>
            </div>
        </form>

    </main>

    <?php include("templates/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>

</body>

</html>