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
    <title>AllMas | Realizar Solicitud</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>
        <div class="container">
            <div class="login-container-request">
                <div class="imagen-login">
                    <img src="assets/img/imagen-solicitud.jpg" alt="">
                </div>
                <div class="formulario">
                    <h2>Realizar Solicitud</h2>
                    <form action="./functions/crud_solicitudes.php" class="row d-flex justify-content-center mt-4"
                        id="form-login" method="post">
                        <!-- <div class="mb-3 col-9">
                            <label for="fechaSolicitudAlmacigo" class="form-label">Fecha de Solicitud</label>
                            <input type="date" class="form-control" id="fechaSolicitudAlmacigo" name="fecha-solicitud"
                                required>
                        </div> -->
                        <div class="mb-3 col-9">
                            <label for="fechaEntregaAlmacigo" class="form-label">Fecha de Entrega</label>
                            <input type="date" class="form-control" id="fechaEntregaAlmacigo" name="fecha-entrega"
                                required>
                        </div>
                        <div class="mb-3 col-9">
                            <label for="cantAlmacigos" class="form-label">Cantidad de Almácigos requeridos</label>
                            <input type="number" class="form-control" id="cantAlmacigos" name="cant-almacigos" required>
                        </div>
                        <div class="mb-3 col-9">
                            <label for="tipoAlmacigoSolicitado" class="form-label">Tipo de Almácigo</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="tipo-semilla">
                                <?php 
                                    $sql = "SELECT TIPO_SEMILLA FROM semilla";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $tipoSemilla = $row["TIPO_SEMILLA"];
                                ?>
                                <option><?php echo $tipoSemilla; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <!-- El precio a mostrar debe ser de acuerdo al que creamos en el crud de semillas -->
                        <div class="mb-3 col-9">
                            <label for="precioAlmacigoSolicitado" class="form-label">Precio del Almácigo</label>
                            <?php 
                                $sql = "SELECT PRECIO_VENTA FROM semilla WHERE TIPO_SEMILLA = '{$tipoSemilla}'";
                                $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)){
                                        $precioSemilla = $row["PRECIO_VENTA"];                           
                                    
                            ?>
                            <input class="form-control" type="text" value=<?php echo $precioSemilla; ?> readonly>
                            <?php }?>

                        </div>

                        <button type="submit" name="nuevaSolicitud" class="btn btn-success col-7 mt-2"
                            name="nuevaSolicitud">Enviar
                            Solicitud</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="alert alert-success alert-dismissible fade show col-2" role="alert" id="alerta-envio-solicitud">
            Datos enviados correctamente
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </main>

    <?php include("templates/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>

</body>

</html>