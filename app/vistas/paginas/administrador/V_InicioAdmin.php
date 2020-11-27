<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Básico</title>


    <script src="https://kit.fontawesome.com/86eb6d6b49.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../../public/css/estilos.css">

</head>

<body>
    <?php
    session_start();
    include("../../../../public/librerias/estilos.php");
    include("../../../../public/librerias/scripts.php");
    include("../../componentesIncludes/navbar.php");
    include("../../../config/database.php");

    ?>
    <div class="d-flex" id="wrapper">



        <!-- Sidebar -->
        <div class="color-primario border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-white">Administrador</div>
            <div class="list-group list-group-flush">
                <ul class="nava">

                    <li>
                        <a class="nav-link" href="PerfilAdmin.php">
                        <i class="far fa-2x fa-address-card"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="V_NuevoDispositivo.php">
                            <i class="fas fa-2x fa-laptop-house"></i>
                            <p>Nuevo Dispositvo</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="V_NuevoContribuyente.php">
                            <i class="fas fa-2x  fa-user-shield"></i>
                            <p>Contribuyente</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="V_AsignarDispositivos.php">
                            <i class="fas fa-2x fa-edit"></i>
                            <p>Asignar</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="V_NuevoTipoServicio.php">
                            <i class="fas fa-2x fa-text-height"></i>
                            <p>Tipo-Servicios</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="V_RegistrarServicios.php">
                            <i class="far fa-2x fa-address-card"></i>
                            <p>Servicios</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="V_RankingConsumo.php">
                            <i class="far fa-2x  fa-list-alt"></i>
                            <p>Ranking</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../conexion/cerrarsesion.php">
                        <i class="far fa-2x fa-times-circle"></i>
                            <p>Cerrar Sesión</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">



            <div class="container-fluid">

                <h1 class="text-center mt-4">Modulo Administrador</h1>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>




    <script src="../../../../public/js/app.js"></script>
</body>

</html>