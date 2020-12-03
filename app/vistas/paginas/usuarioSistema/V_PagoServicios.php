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
    if (!isset($_SESSION["Id"]) || $_SESSION["Id"] == 1) {
        header('location:../../../../index.php');
    }

    include("../../../../public/librerias/estilos.php");
    include("../../../../public/librerias/scripts.php");
    include("../../componentesIncludes/navbar.php");
    include("../../../config/database.php");

    ?>
    <link rel="stylesheet" href="../../../../public/css/estilos.css">
    <div class="d-flex" id="wrapper">
        <?php
        include("../../componentesIncludes/sidebarUsuarioSistema.php");
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="text-center">Pago de Servicios</h1>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-11 col-12">
                            <form action="javascript:registrarPago()" id="costo">
                                <label for="cmbContribuyente" class=" mb-2">Contribuyente</label>
                                <select name="cmbContribuyente" id="cmbContribuyente" class="form-control mb-5" required>
                                </select>
                                <div id="Datoscontribuyente">

                                </div>
                                <label for="cmbServicio" class=" mb-2">Servicio</label>
                                <select name="" id="cmbServicio" class="form-control mt-4 mb-5" required>
                                </select>
                                <div id="DatosServicio">

                                </div>
                                <input type="hidden" name="" id="txtIdUsuario" value="<?php echo $_SESSION["Id"]; ?>">
                                <button class="btn btn-info form-control mt-3">Registrar Pago</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("../../componentesIncludes/footer.php"); ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#cmbContribuyente").select2();
            $("#cmbServicio").select2();
        });
    </script>
    <script src="../../../backend/metodosJs/pagoServicios.js"></script>
    <script src="../../../../public/js/app.js"></script>
</body>

</html>