<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="../../../../public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../../public/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../../../../public/assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../../public/css/estilos.css">
     <link rel="stylesheet" href="../../../../public/css/normalize.css">
</head>

<body>
    <?php
    include("../../../../public/librerias/estilos.php");
    include("../../../../public/librerias/scripts.php");
    include("../../componentesIncludes/navbar.php");
    ?>
    <div class="">
        <!--inicio container-->
        <div class="row">
            <!--inicio fila-->

            <div class="col-md-4 col-sm-1 col-1">
                <!--inicio columna 1-->
                <div class="wrapper">
                    <div class="sidebar" data-color="blue" data-image="../../../../public/assets/img/sidebar-4.jpg">
                        <div class="sidebar-wrapper">
                            <div class="logo">
                                <a href="http://www.creative-tim.com" class="simple-text">
                                    Administrador
                                </a>
                            </div>
                            <ul class="nav">

                                <li>
                                    <a class="nav-link" href="PerfilAdmin.php">
                                        <i class="nc-icon nc-circle-09"></i>
                                        <p>Perfil</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="V_NuevoDispositivo.php">
                                        <i class="nc-icon nc-notes"></i>
                                        <p>Nuevo Dispositvo</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="V_NuevoContribuyente.php">
                                        <i class="nc-icon nc-notes"></i>
                                        <p>Contribuyente</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="V_AsignarDispositivos.php">
                                        <i class="nc-icon nc-paper-2"></i>
                                        <p>Asignar</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="V_NuevoTipoServicio.php">
                                        <i class="nc-icon nc-paper-2"></i>
                                        <p>Tipo-Servicios</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="V_RegistrarServicios.php">
                                        <i class="nc-icon nc-atom"></i>
                                        <p>Servicios</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="V_RankingConsumo.php">
                                        <i class="nc-icon nc-atom"></i>
                                        <p>Ranking</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="../conexion/cerrarsesion.php">
                                        <i class="nc-icon nc-pin-3"></i>
                                        <p>Cerrar Sesión</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--fin columan 1-->
            <div class="col-md-6 col-sm-5 col-12">

                <!--i6cio columna2-->
                <h1 class="text-center mt-4">Modulo Administrador</h1>

            </div>
            <!--fin columna2-->

        </div>
        <!--fin fila-->
    </div>
    <!--fin container-->

</body>

</html>