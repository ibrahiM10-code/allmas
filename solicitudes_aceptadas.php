<?php

    include("templates/conexion_sesion.php");
    $sql = "SELECT * FROM solicitud WHERE ESTADO_ALMACIGO = 2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $estadoAceptado = $row["ESTADO_ALMACIGO"];
        }
    } else {
        header("Location:mantenedor_solicitud.php?sinSolicitudesAceptadas");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>AllMas | Solicitudes Aceptadas</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>
        <div class="container mt-5" style="width: 60%;">
            <?php if($estadoAceptado == 2):?>
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Fecha de Entrega</th>
                    <th>Cantidad de Almácigos pedidos</th>
                    <th>Tipo de Almácigo</th>
                    <th>Estado de Solicitud</th>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM solicitud WHERE ESTADO_ALMACIGO = 2";
                        $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $estadoAceptado = $row["ESTADO_ALMACIGO"];
                                    $fechaEntrega = $row["FECHA_ENTREGA"];
                                    $cantAlmacigos = $row["CANT_ALMACIGOS_SOLICITADOS"];
                                    $tipoAlmacigo = $row["TIPO_ALMACIGO"];
                                    $prioridadSolicitud = $row["PRIORIDAD_SOLICITUD"];
                    ?>
                    <tr>
                        <td><?php echo $fechaEntrega?></td>
                        <td><?php echo $cantAlmacigos?></td>
                        <td><?php echo $tipoAlmacigo?></td>
                        <td><?php echo $estadoAceptado?></td>
                    </tr>
                    <?php }?>
                    <?php }?>
                </tbody>
            </table>
            <?php endif;?>
        </div>
    </main>

    <?php include("templates/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>

</body>

</html>