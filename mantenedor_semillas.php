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

    <main>

        <div class="container mt-5">
            <h5>Agregar Semillas</h5>
            <form action="./functions/crud_semillas.php" method="post" enctype="multipart/form-data">
                <div class="mt-5 mb-3 row">
                    <label for="inputCodSemilla" class="col-sm-2 col-form-label">Codigo de Semilla</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodSemilla" name="cod-semilla">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputStockSemilla" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputStockSemilla" name="stock-semilla">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNomSemilla" class="col-sm-2 col-form-label">Nombre Semilla</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNomSemilla" name="nombre-semilla">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTipoSemilla" class="col-sm-2 col-form-label">Tipo Semilla</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTipoSemilla" name="tipo-semilla">
                    </div>
                </div>
                <div class="mb-3 row">
                    <!-- Must show current date using JavaScript -->
                    <label for="inputFechaIngreso" class="col-sm-2 col-form-label">Fecha de Ingreso</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputFechaIngreso" name="fecha-ingreso">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPrecioVenta" class="col-sm-2 col-form-label">Precio Venta</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPrecioVenta" name="precio-venta">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPrecioCompra" class="col-sm-2 col-form-label">Precio Compra</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPrecioCompra" name="precio-compra">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fileImagenPlanta" class="col-sm-2 col-form-label">Imagen de la planta germinada</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="fileImagenPlanta" name="imagen-planta">
                    </div>
                </div>

                <button type="submit" class="btn btn-success" name="nuevaSemilla">Guardar datos de
                    la semilla</button>

            </form>

            <div class="container mt-4 mb-4">
                <p><a class="link-opacity-100" href="listado_semillas.php">Haga clic aqui para leer, modificar o borrar
                        semillas</a></p>
            </div>
        </div>


    </main>

    <?php include("templates/footer.php");?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>
</body>

</html>