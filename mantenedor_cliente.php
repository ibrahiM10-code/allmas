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
    <title>AllMas | Nuevo Cliente</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>

        <div class="container mt-5">
            <h5>Ingrese los datos del nuevo cliente (empresa)</h5>
            <form action="functions/crud_clientes.php" method="post" enctype="multipart/form-data">
                <div class=" mt-5 mb-3 row">
                    <label for="inputNombreEmpresa" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombreEmpresa" name="nombre-empresa" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputRutEmpresa" class="col-sm-2 col-form-label">Rut de la empresa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRutEmpresa" name="rut-empresa" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNroFono" class="col-sm-2 col-form-label">Número de teléfono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNroFono" name="nro-telefono-empresa" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputGiroEmps" class="col-sm-2 col-form-label">Giro</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputGiroEmps" name="giro-empresa" required>
                    </div>

                </div>
                <div class="mb-3 row">
                    <label for="logo-empresa" class="col-sm-2 col-form-label">Importe el logo de la empresa</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="logo-empresa" name="logo-empresa">
                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <h5>Ingrese los datos de contacto del funcionario de la empresa</h5>
                <div class="mt-5 mb-3 row">
                    <label for="inputNombreFunc" class="col-sm-2 col-form-label">Nombre Completo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombreFunc" name="nombre-func" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputRutFunc" class="col-sm-2 col-form-label">RUT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRutFunc" name="rut-func" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNroFonoFunc" class="col-sm-2 col-form-label">Número de teléfono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNroFonoFunc" name="nro-telefono-func" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputEmailFunc" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmailFunc" name="email-func" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputClaveFunc" class="col-sm-2 col-form-label">Clave</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputClaveFunc" name="clave-func" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="foto-perfil-func" class="col-sm-2 col-form-label">Importe la foto de perfil del
                        funcionario</label>
                    <div class="col-sm-10 col-lg-5">
                        <input class="form-control" type="file" id="foto-perfil-func" name="foto-perfil-func">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="nuevoCliente">Guardar todos
                    los datos</button>
            </form>

        </div>

        <div class="container mt-4 mb-4">
            <p><a class="link-opacity-100" href="./listado_clientes.php">Haga clic aqui para leer, modificar o borrar
                    clientes</a></p>
        </div>

    </main>


    <?php include("templates/footer.php");?>
</body>

</html>