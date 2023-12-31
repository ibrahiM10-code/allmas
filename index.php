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
    <title>AllMas</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/img/logo.png" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top" id="logo">
                    <span class="px-2">AllMas Servicios de Almácigos</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <?php if ($_SESSION["tipoUsuario"] == 10):?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./crear_cuentas.php">Crear cuenta</a>
                        </li>
                        <?php endif;?>
                        <?php if (($_SESSION["tipoUsuario"]) == 10):?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./mantenedor_cliente.php">Clientes</a>
                        </li>
                        <?php endif;?>
                        <?php if (($_SESSION["tipoUsuario"]) == 10 || ($_SESSION["tipoUsuario"]) == 1):?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./mantenedor_semillas.php">Semillas</a>
                        </li>
                        <?php endif;?>
                        <?php if (($_SESSION["tipoUsuario"]) == 10 || ($_SESSION["tipoUsuario"]) == 1 || ($_SESSION["tipoUsuario"]) == 2 || ($_SESSION["tipoUsuario"]) == 3):?>
                        <li class="nav-item">
                            <a href="./mantenedor_solicitud.php" class="nav-link active">Solicitud</a>
                        </li>
                        <?php endif;?>
                        <li class="nav-item">
                            <a href="#contactos-footer" class="nav-link active">Contactos</a>
                        </li>
                        <?php if (($_SESSION["tipoUsuario"]) == 10 || ($_SESSION["tipoUsuario"]) == 1 || ($_SESSION["tipoUsuario"]) == 2 || $_SESSION["tipoUsuario"] == 3):?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./functions/cerrar_sesion.php">Salir</a>
                        </li>
                        <?php endif;?>
                    </ul>
                    <span class="navbar-text">
                        <?php switch($_SESSION["tipoUsuario"]){
                                case 3:
                                    $_SESSION["tipoUsuario"] = "Cliente";
                                    break;
                                case 2:
                                    $_SESSION["tipoUsuario"] = "Jefe de Siembra";
                                    break;
                                case 1:
                                    $_SESSION["tipoUsuario"] = "Administrativo";
                                    break;
                                case 10:
                                    $_SESSION["tipoUsuario"] = "Administrador";
                                    break;
                                default:
                                    break;
                        }?>
                        <?php echo $_SESSION['nombreUsuario'] . " (". $_SESSION['tipoUsuario'] . ")"; ?>
                    </span>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="image-container">
            <img src="./assets/img/fondo2.jpg" alt="imagen-de-plantas" class="imagen-principal">
            <div class="big-text">
                <h1>Bienvenidos a AllMas</h1>
                <h4>La empresa ideal para la producción de sus almácigos</h4>
            </div>
        </div>

        <div class="container company-features" style="width: 90%;">
            <div class="row">
                <div class="col-4 feature-container" style="border-right: 1px solid whitesmoke;">
                    <img src="./assets/img/tiempo.png" alt="imagen-reloj" class="feature-icon">
                    <div class="feauture-description">
                        <p class="feature">Rápidos en atender</p>
                        <p class="description">Al ser la mejor empresa de nuestro rubro, es nuestro objetivo la rápida
                            atención al cliente.
                        </p>
                    </div>
                </div>
                <div class="col-4 feature-container" style="border-right: 1px solid whitesmoke;">
                    <img src="./assets/img/audiencia.png" alt="imagen-grupo-de-personas" class="feature-icon">
                    <div class="feauture-description">
                        <p class="feature">Apasionados y Dedicados</p>
                        <p class="description">Contamos con un gran numero de trabajadores que aman el trato con las
                            plantas y que no
                            dejaran su trabajo ni descuidado ni incompleto.</p>
                    </div>
                </div>
                <div class="col-4 feature-container">
                    <img src="./assets/img/confianza.png" alt="imagen-apreton-de-manos" class="feature-icon">
                    <div class="feauture-description">
                        <p class="feature">Confianza y Seguridad</p>
                        <p class="description">Al dejar sus almácigos bajo nuestro cuidado y atención, la preocupación
                            del cliente debe ser
                            nula, ya que, nuestro margen de error es invisible.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hacer una sección más (Poner fotos de las instalaciones donde crecen los almácigos) o un incentivador para que el usuario inicie sesion -->
        <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="opinion-container">
                        <div class="person-picture">
                            <img src="./assets/img/foto-perfil3.jpg" class="opinion-person-pic">
                        </div>
                        <div class="opinion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iure obcaecati, totam, nobis
                            minima qui
                            cum rem ipsum libero sed nam doloremque soluta, consequuntur vero omnis? Dolorem beatae
                            doloremque
                            excepturi ut soluta, dolores deserunt? Eligendi corporis dignissimos ipsa, deleniti quo,
                            sunt sint non
                            nisi nam nulla vel, minima iusto rerum. Aperiam reprehenderit, provident quas perspiciatis
                            dolorum odit,
                            magnam consequatur quis necessitatibus suscipit eaque corrupti sed, eligendi sequi
                            repudiandae. Quas
                            expedita, obcaecati incidunt quo eligendi quisquam ratione. Ipsa obcaecati neque vero quae
                            nam dolores,
                            facere, nostrum consectetur, voluptatem eligendi nihil cumque?
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="opinion-container">
                        <div class="person-picture">
                            <img src="./assets/img/foto-perfil1.jpg" class="opinion-person-pic">
                        </div>
                        <div class="opinion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iure obcaecati, totam, nobis
                            minima qui
                            cum rem ipsum libero sed nam doloremque soluta, consequuntur vero omnis? Dolorem beatae
                            doloremque
                            excepturi ut soluta, dolores deserunt? Eligendi corporis dignissimos ipsa, deleniti quo,
                            sunt sint non
                            nisi nam nulla vel, minima iusto rerum. Aperiam reprehenderit, provident quas perspiciatis
                            dolorum odit,
                            magnam consequatur quis necessitatibus suscipit eaque corrupti sed, eligendi sequi
                            repudiandae.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="opinion-container">
                        <div class="person-picture">
                            <img src="./assets/img/foto-perfil2.jpg" class="opinion-person-pic">
                        </div>
                        <div class="opinion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iure obcaecati, totam, nobis
                            minima qui
                            cum rem ipsum libero sed nam doloremque soluta, consequuntur vero omnis? Dolorem beatae
                            doloremque
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </main>

    <footer id="contactos-footer">
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