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

    <header>
        <nav class="navbar login-nav">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand" href="./index.html">
                    <img src="assets/img/logo.png" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top">
                    AllMas
                </a>
            </div>
        </nav>
    </header>

    <main>

        <form action="./functions/crud_cuentas.php" method="post" class="form-new-accounts">

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
                    <span class="input-group-text" id="basic-addon2">@allmas.com</span>
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
                        <input class="form-control" type="file" id="formFile">
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

        <div class="alert alert-success alert-dismissible fade show col-2" id="alerta-login" role="alert">
            Inicio sesión correctamente!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </main>


    <footer>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">© 2023 AllMas Servicios de Almácigos</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <!-- poner los iconos de las redes sociales y solo mantener el home -->

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link mt-1 text-body-secondary">Contactos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><img
                                src="./assets/img/facebook.png"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><img
                                src="./assets/img/gmail.png"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"> <img
                                src="./assets/img/twitter.png"> </a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><img
                                src="./assets/img/instagram.png"></a></li>
                </ul>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>
</body>

</html>