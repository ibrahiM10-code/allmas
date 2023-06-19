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
    <title>AllMas | Semillas</title>
</head>

<body>

    <?php include("templates/nav.php");?>
    </header>

    <div class="container mt-5" style="width: 60%;">
        <h1>Listado Semillas</h1>
        <?php if(isset($_GET["nuevaSemillaAgregada"])):?>
        <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
            Semilla agregada!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif;?>
        <?php if(isset($_GET["semillaModificada"])):?>
        <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
            Semilla modificada!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif;?>
        <?php if(isset($_GET["semillaEliminada"])):?>
        <div class="alert alert-danger alert-dismissible fade show col-3" role="alert">
            Semilla eliminada
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif;?>
        <table class="table table-bordered">
            <thead>
                <th>Codigo Semilla</th>
                <th>Stock</th>
                <th>Nombre semilla</th>
                <th>Tipo semilla</th>
                <th>Fecha de Ingreso</th>
                <th>Precio Venta</th>
                <th>Precio Compra</th>
                <th>Foto</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>

                <?php 
                        $query = "SELECT * FROM semilla";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $codigoSemilla = $row["CODIGO_SEMILLA"];
                                $stockSemilla = $row["STOCK_SEMILLA"];
                                $nombreSemilla = $row["NOMBRE_SEMILLA"];
                                $tipoSemilla = $row["TIPO_SEMILLA"];
                                $fechaIngreso = $row["FECHA_INGRESO"];
                                $precioVenta = $row["PRECIO_VENTA"];
                                $precioCompra = $row["PRECIO_COMPRA"];
                                $fotoSemilla = $row["IMG_PLANTA_GERMINADA"];
                ?>

                <tr>
                    <td><?php echo $codigoSemilla ?></td>
                    <td><?php echo $stockSemilla ?></td>
                    <td><?php echo $nombreSemilla ?></td>
                    <td><?php echo $tipoSemilla ?></td>
                    <td><?php echo $fechaIngreso ?></td>
                    <td><?php echo $precioVenta ?></td>
                    <td><?php echo $precioCompra ?></td>
                    <td><img src="assets/img/<?php echo $fotoSemilla; ?>" width="80px"></td>
                    <td><a href="mod_semillas.php?codigoSemilla=<?php echo $codigoSemilla?>"><img
                                src="assets/img/actualizar.png" width="40px" alt=""></a></td>
                    <td><a href="functions/crud_semillas.php?codigoSemilla=<?php echo $codigoSemilla?>&eliminar"><img
                                src="assets/img/borrar.png" width="40px" alt=""></a></td>
                </tr>

                <?php }?>
                <?php }?>
            </tbody>
        </table>
    </div>

    <?php include("templates/footer.php");?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>
</body>

</html>