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
    if(!isset($_SESSION["Id"]) || $_SESSION["Id"]>1){
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
                <h1 class="text-center">Registrar Servicios</h1>

                <div class="container">
                    <div class="row justify-content-center animated fadeInUp">
                        <div class="col-md-6 col-sm-12 col-12">
                            <form action="javascript:RegistrarServicios()">
                                <input type="text" placeholder="Nombre del servicio" class="form-control mt-4" id="txtServicio" required>
                                <input type="number" placeholder="Costo" class="form-control mt-4" id="txtCosto" required>
                                <select class="form-control mt-4" id="cmbTipoServicio">
                                    <option value="">Tipo de servicio</option>
                                </select>
                                <button class="boton form-control ">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("../../componentesIncludes/footer.php");?>
        </div>
    </div>
    <script src="../../../backend/metodosJs/servicio.js"></script>
</body>

</html>