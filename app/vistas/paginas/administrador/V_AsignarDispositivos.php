<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["Id"]) || $_SESSION["Id"] > 1) {
        header('location:../../../../index.php');
    }
    include("../../../../public/librerias/estilos.php");
    include("../../../../public/librerias/scripts.php");
    include("../../componentesIncludes/navbar.php");
    ?>
    <link rel="stylesheet" href="../../../../public/css/estilos.css">
    <link rel="stylesheet" href="../../../../public/css/normalize.css">
    <div class="d-flex" id="wrapper">
        <?php
        include("../../componentesIncludes/sidebar.php");
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">


                <div class="container">
                    <div class="text-lg-right">
                        <h2 class="text-center">Asignar Dispositivos</h2>
                        <a href="V_Asignaciones.php" class=" btn btn-danger"> Ver Asignaciones</a>
                    </div>
                    <form action="javascript:RegistrarAsignarDispositivo()">
                        <div class="row justify-content-center animated fadeInDown">
                            <div class="col-md-5 col-sm-12 col-12">
                                <select id="cmbContribuyente" class="form-control mt-4" required>
                                    <option value="">Elige el contribuyente</option>
                                </select>
                            </div>
                            <div class="col-md-5 col-sm-12 col-12">
                                <select id="cmbDispositivo" class="form-control mt-4" required>
                                    <option value="">Elige un dispositivo</option>
                                </select>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <button class="boton form-control ">Registrar</button>
                            </div>
                        </div>
¿
                    </form>
                </div>
            </div>
            <?php include("../../componentesIncludes/footer.php"); ?>
        </div>
    </div>
    <script src="../../../../public/js/app.js"></script>
    <script src="../../../backend/metodosJs/asignarDispositivos.js"></script>
</body>

</html>