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
    <title>AllMas | Clientes</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>

        <div class="container mt-5">
            <h1>Datos Empresa</h1>
            <?php if(isset($_GET["nuevoClienteAgregado"])):?>
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
                Cliente creado!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <?php if(isset($_GET["empresaModificada"])):?>
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
                Empresa modificada!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <?php if(isset($_GET["clienteModificado"])):?>
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
                Funcionario Modificado!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <?php if(isset($_GET["datosEliminados"])):?>
            <div class="alert alert-danger alert-dismissible fade show col-3" role="alert">
                Datos del Cliente eliminados
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <table class="table table-stripped mt-3">
                <thead>
                    <th>Nombre empresa</th>
                    <th>RUT empresa</th>
                    <th>Número de telefono</th>
                    <th>Giro</th>
                    <th>Logo</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>

                    <?php 
                        $query = "SELECT * FROM cliente";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $rutEmpresa = $row["RUT_EMPRESA"];
                                $nombreEmpresa = $row["NOMBRE_EMPRESA"];
                                $telefonoEmpresa = $row["TELEFONO_EMPRESA"];
                                $giroEmpresa = $row["GIRO"];
                                $logoEmpresa = $row["LOGO_EMPRESA"];
                    ?>


                    <tr>
                        <td><?php echo $nombreEmpresa ?></td>
                        <td><?php echo $rutEmpresa ?></td>
                        <td><?php echo $telefonoEmpresa ?></td>
                        <td><?php echo $giroEmpresa?></td>
                        <td><img src="assets/img/<?php echo $logoEmpresa;?>" width="80px"></td>
                        <td><a href="mod_cliente.php?rutEmpresa=<?php echo $rutEmpresa?>"><img src="img/actualizar.png"
                                    width="40px" alt=""></a>
                        </td>
                        <td><a href="functions/crud_clientes.php?rutEmpresa=<?php echo $rutEmpresa?>&eliminar"><img
                                    src="img/borrar.png" width="40px" alt=""></a></td>
                    </tr>

                    <?php }?>
                    <?php }?>

                </tbody>
            </table>
            <h1 class="mt-5">Datos funcionarios</h1>
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert" id="alerta-eliminacion">
                Funcionario eliminado correctamente
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <table class="table table-stripped mt-3">
                <thead>
                    <th>Nombre Completo</th>
                    <th>RUT</th>
                    <th>Número de telefono</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>

                    <?php 
                        $query = "SELECT * FROM cliente";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $nombreFunc = $row["NOMBRE_FUNC_EMPRESA"];
                                $rutFunc = $row["RUT_FUNC_EMPRESA"];
                                $telefonoFunc = $row["TELEFONO_FUNC_EMPRESA"];
                                $emailFunc = $row["CORREO_FUNC_EMPRESA"];
                                $fotoFunc = $row["FOTO_PERFIL_FUNC_EMPRESA"];
                    ?>



                    <tr>
                        <td><?php echo $nombreFunc ?></td>
                        <td><?php echo $rutFunc ?></td>
                        <td><?php echo $telefonoFunc ?></td>
                        <td><?php echo $emailFunc ?></td>
                        <td><img src="assets/img/<?php echo $fotoFunc; ?>" width="80px"></td>
                        <td><a href="mod_cliente.php?rutFuncionario=<?php echo $rutFunc?>"><img src="img/actualizar.png"
                                    width="40px" alt=""></a>
                        </td>
                        <td><a href="./functions/crud_clientes.php?rutFuncionario=<?php echo $rutFunc?>&eliminar"><img
                                    src="img/borrar.png" width="40px" alt=""></a></td>
                    </tr>
                    <?php }?>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </main>

    <?php include("templates/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>
</body>

</html>