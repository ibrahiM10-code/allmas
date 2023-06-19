<?php
    include("./functions/conexion.php");
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
    <title>AllMas | Log In</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>

        <?php if(isset($_GET["errorDeIngreso"])):?>
        <div class="alert alert-danger alert-dismissible fade show col-3" role="alert">
            Error al loguearse.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif;?>
        <div class="login-container">
            <div class="imagen-login">
                <img src="assets/img/fondo1.jpg" alt="">
            </div>
            <div class="formulario">
                <h2>Iniciar sesión</h2>
                <form action="./functions/valida_login.php" class="row d-flex justify-content-center mt-4"
                    id="form-login" method="post">
                    <div class="mb-3 col-9">
                        <label for="rut" class="form-label">Rut</label>
                        <input type="text" class="form-control" id="rut" aria-describedby="emailHelp" name="rutUsuario"
                            required>
                    </div>
                    <div class="mb-3 col-9">
                        <label for="clave" class="form-label">Clave</label>
                        <input type="password" class="form-control" id="clave" name="claveUsuario" required>
                    </div>
                    <div class="col-9">
                        <label for="">Tipo de usuario:</label>
                        <select id="tipo_cuenta" name="tipoUsuario">
                            <option value="10">Administrador</option>
                            <option value="2">Jefe de Siembra</option>
                            <option value="3">Cliente</option>
                            <option value="1">Perfil Administrativo</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="submit-login" name="login-btn" onclick="return validar();">Iniciar
                            sesión</button>
                    </div>
                </form>
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