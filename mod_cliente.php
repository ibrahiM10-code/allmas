<?php
    include("templates/conexion_sesion.php");

    if (isset($_GET["rutEmpresa"])) {
        $rutEmpresaGet = $_GET["rutEmpresa"];

        $sql = "SELECT * FROM cliente WHERE RUT_EMPRESA = '{$rutEmpresaGet}'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rutEmpresa = $row["RUT_EMPRESA"];
                $nombreEmpresa = $row["NOMBRE_EMPRESA"];
                $telefonoEmpresa = $row["TELEFONO_EMPRESA"];
                $giroEmpresa = $row["GIRO"];
                $logoEmpresa = $row["LOGO_EMPRESA"];
            }
        }

    } elseif (isset($_GET["rutFuncionario"])) {
        
        $rutFuncionarioGet = $_GET["rutFuncionario"];
        $query = "SELECT * FROM cliente WHERE RUT_FUNC_EMPRESA = '{$rutFuncionarioGet}'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $nombreFunc = $row["NOMBRE_FUNC_EMPRESA"];
                $rutFunc = $row["RUT_FUNC_EMPRESA"];
                $telefonoFunc = $row["TELEFONO_FUNC_EMPRESA"];
                $emailFunc = $row["CORREO_FUNC_EMPRESA"];
                $claveFunc = $row["CLAVE_FUNC_EMPRESA"];
                $fotoFunc = $row["FOTO_PERFIL_FUNC_EMPRESA"];
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
    <title>AllMas | Clientes</title>
</head>

<body>

    <?php include("templates/nav.php");?>


    <main>

        <div class="container mt-5">
            <h1>Modificar datos Empresa</h1>

            <form action="./functions/crud_clientes.php" method="post" enctype="multipart/form-data">
                <div class="mt-5 mb-3 row">
                    <label for="inputNombreCliente" class="col-sm-2 col-form-label">Nombre Empresa: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombreCliente" name="nombre-empresa"
                            value="<?php if(isset($_GET["rutEmpresa"])){echo $nombreEmpresa;}?>" required>
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="inputRut" class="col-sm-2 col-form-label">RUT Empresa</label>
                    <div class="col-sm-10">
                        <input <?php if(isset($_GET["rutEmpresa"])){ echo "readonly" ;}?> type="text"
                            class="form-control" id="inputRut" name="rut-empresa"
                            value="<?php if(isset($_GET["rutEmpresa"])){echo $rutEmpresa;}?>">
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="inputNroTelefono" class="col-sm-2 col-form-label">Numero de telefono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNroTelefono" name="nro-telefono-empresa"
                            value="<?php if(isset($_GET["rutEmpresa"])){echo $telefonoEmpresa;}?>" required>
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="inputGiroEmpresa" class="col-sm-2 col-form-label">Giro</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputGiroEmpresa" name="giro-empresa"
                            value="<?php if(isset($_GET["rutEmpresa"])){echo $giroEmpresa;}?>" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputNombreEmpresa" name="logo-empresa">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="empresaModificada"
                    <?php if(isset($_GET["rutFuncionario"])){echo "disabled=disabled";}?>>Modificar
                    los datos</button>
            </form>
        </div>

        <div class="container mt-5">
            <hr class="mb-5">
            <h1>Modificar datos Funcionario</h1>
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert" id="alerta-modificacion">
                Funcionario modificado correctamente
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form action="./functions/crud_clientes.php" method="post" enctype="multipart/form-data">
                <div class=" mb-3 row">
                    <label for="inputNombreCliente" class="col-sm-2 col-form-label">Nombre: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombreCliente" name="nombre-func"
                            value="<?php if(isset($_GET["rutFuncionario"])){echo $nombreFunc;}?>" required>
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="inputRut" class="col-sm-2 col-form-label">RUT</label>
                    <div class="col-sm-10">
                        <input <?php if(isset($_GET["rutFuncionario"])){echo "readonly";}?> type="text"
                            class="form-control" id="inputRut" name="rut-func"
                            value="<?php if(isset($_GET["rutFuncionario"])){echo $rutFunc;}?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNroTelefono" class="col-sm-2 col-form-label">Numero de telefono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNroTelefono" name="nro-telefono-func"
                            value="<?php if(isset($_GET["rutFuncionario"])){echo $telefonoFunc;}?>" required>
                    </div>
                </div>

                <div class=" mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputNombreEmpresa" name="email-func"
                            value="<?php if(isset($_GET["rutFuncionario"])){echo $emailFunc;}?>" required>
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="inputRut" class="col-sm-2 col-form-label">Clave</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRut" name="clave-func"
                            value="<?php if(isset($_GET["rutFuncionario"])){echo $claveFunc;}?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputNombreEmpresa" name="foto-perfil-func">
                    </div>
                </div>
                <button <?php if(isset($_GET["rutEmpresa"])){echo 'disabled=disabled';}?> type="submit"
                    class="btn btn-success" name="clienteModificado">Modificar
                    los datos</button>
            </form>
        </div>
    </main>

    <?php include("templates/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>
</body>

</html>