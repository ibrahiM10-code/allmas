<?php 
    include("templates/conexion_sesion.php");

    if (isset($_GET["codigoSemilla"])) {
        $codSemilla = $_GET["codigoSemilla"];

        $sql = "SELECT * FROM semilla where CODIGO_SEMILLA = '{$codSemilla}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $codigoSemilla = $row["CODIGO_SEMILLA"];
                $stockSemilla = $row["STOCK_SEMILLA"];
                $nombreSemilla = $row["NOMBRE_SEMILLA"];
                $tipoSemilla = $row["TIPO_SEMILLA"];
                $fechaIngreso = $row["FECHA_INGRESO"];
                $precioVenta = $row["PRECIO_VENTA"];
                $precioCompra = $row["PRECIO_COMPRA"];
                $imagenPlanta = "";
            }
        }


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
    <title>AllMas | Semillas</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>
        <div class="container mt-5">
            <h1>Modificar datos semillas</h1>
            <form action="./functions/crud_semillas.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="inputNombreCliente" class="col-sm-2 col-form-label">Codigo de semilla: </label>
                    <div class="col-sm-10">
                        <input <?php if(isset($_GET["codigoSemilla"])){echo "readonly";}?> type="text"
                            class="form-control" id="inputNombreCliente" name="codigo-semilla"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $codigoSemilla;}?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNombreCliente" class="col-sm-2 col-form-label">Nombre: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombreCliente" name="nombre-semilla"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $nombreSemilla;}?>" required>
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="inputRut" class="col-sm-2 col-form-label">Tipo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRut" name="tipo-semilla"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $tipoSemilla;}?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNroTelefono" class="col-sm-2 col-form-label">Fecha de ingreso</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputNroTelefono" name="fecha-ingreso"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $fechaIngreso;}?>" required>
                    </div>
                </div>

                <div class=" mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputNombreEmpresa" name="stock-semilla"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $stockSemilla;}?>" required>
                    </div>
                </div>

                <div class=" mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Precio venta</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputNombreEmpresa" name="precio-venta"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $precioVenta;}?>" required>
                    </div>
                </div>

                <div class=" mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Precio compra</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputNombreEmpresa" name="precio-compra"
                            value="<?php if(isset($_GET["codigoSemilla"])){echo $precioCompra;}?>" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputNombreEmpresa" name="imagen-planta">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="semillaModificada"">Modificar
                    los datos</button>
            </form>
        </div>
    </main>

    <?php include("templates/footer.php");?>

        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                    crossorigin="anonymous">
                    </script>
                    <script src="./assets/js/index.js"></script>
</body>

</html>