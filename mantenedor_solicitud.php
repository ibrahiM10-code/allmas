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
    <title>AllMas | Solicitud</title>
</head>

<body>

    <?php include("templates/nav.php");?>

    <main>

        <div class="container mt-5">
            <div class="solicitud-header">
                <h1>Solicitudes</h1>
            </div>
            <?php if(isset($_GET["sinSolicitudesAceptadas"])):?>
            <div class="alert alert-danger alert-dismissible fade show col-3" role="alert">
                No hay solicitudes aceptadas.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <?php if(isset($_GET["estadoSolicitudActualizado"])):?>
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
                Estado actualizado!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <div class="cards-container">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/img/realizar_solicitud.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./realizar_solicitud.php">
                            <h5 class="card-title">Realizar Solicitud</h5>
                        </a>
                        <p class="card-text">Ingrese aquí para poder realizar la solicitud del o los almácigos que
                            necesita adquirir, contribuyendo con la información neceseria para poder trabajarlos.</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="./assets/img/ver_solicitud.jpg" class="card-img-top" id="img-vertical-solicitud">
                    <div class="card-body">
                        <a href="./solicitudes_enviadas.php">
                            <h5 class="card-title">Solicitudes Realizadas</h5>
                        </a>
                        <p class="card-text">Revise aquí, todas las solicitudes que ha realizado hasta la fecha</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="./assets/img/solicitud_aceptada.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./solicitudes_aceptadas.php">
                            <h5 class="card-title">Solicitudes Aceptadas</h5>
                        </a>
                        <p class="card-text">En este apartado vea todas las solicitudes que ha realizado y han sido
                            aceptadas por nosotros</p>
                    </div>
                </div>
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