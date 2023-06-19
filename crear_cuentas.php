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
    <title>AllMas | Crear Cuentas</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>
        <?php if(isset($_GET["cuentaCreada"])):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Cuenta creada!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif;?>
        <form action="./functions/crud_cuentas.php" method="post" class="form-new-accounts"
            enctype="multipart/form-data">

            <div class="container">
                <h1>Crear cuentas nuevas</h1>
                <div class="input-group mt-3">
                    <input type="text" class="form-control" aria-label="Rut del usuario" aria-describedby="basic-addon1"
                        placeholder="Rut del usuario" name="rut-usuario">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" aria-label="Nombre del Usuario"
                        aria-describedby="basic-addon1" placeholder="Nombre del Usuario" name="nombre-usuario">
                </div>
                <div class="input-group mt-3">
                    <input type="text" class="form-control" aria-label="Apellido Paterno"
                        aria-describedby="basic-addon1" placeholder="Apellido Paterno" name="apellido-paterno">
                </div>
                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" aria-label="Apellido Materno"
                        aria-describedby="basic-addon1" placeholder="Apellido Materno" name="apellido-materno">
                </div>
                <h6>Indique la fecha de nacimiento del usuario:</h6>
                <div class="input-group">
                    <input type="date" class="form-control" aria-label="Fecha nacimiento"
                        aria-describedby="basic-addon1" placeholder="Fecha nacimiento" name="fecha-nacimiento">
                </div>
                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" placeholder="Nuevo correo empresarial"
                        aria-label="Nuevo correo empresarial" aria-describedby="basic-addon2" name="correo-usuario">
                    <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                </div>
                <div class="mt-3 mb-3">
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Clave"
                        aria-labelledby="passwordHelpBlock" name="clave-usuario">
                </div>
                <h6>Indique el tipo de usuario de esta nueva cuenta:</h6>
                <div class="form-floating mb-4">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                        name="tipo-usuario">
                        <option value="1">Perfil Administrativo</option>
                        <option value="2">Jefe de Siembra</option>
                        <option value="3">Cliente</option>
                    </select>
                </div>
                <h6>Importe la foto de perfil del usuario</h6>
                <div class="mb-4 row">
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile" name="foto-perfil">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="nuevoUsuario">Crear nueva
                    cuenta de
                    usuario</button>
                <div class="alert alert-success alert-dismissible fade show col-3" role="alert"
                    id="alerta-cuenta-nueva">
                    Datos guardados correctamente
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
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