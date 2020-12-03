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
                <h1 class="text-center">Nuevo Dispositivo</h1>
                <div class="row justify-content-center animated fadeInRight">
                    <div class="col-md-5 col-sm-11">
                        <form action="javascript:RegistrarDispositivo()">
                            <input type="text" class="form-control mt-4" placeholder="Id del Dispositivo" id="txtId" required minlength="1" maxlength="10">
                            <input type="text" class="form-control mt-4" placeholder="Nombre del Dispositivo" id="txtNombre" required minlength="2">
                            <input type="text" class="form-control mt-4" placeholder="Descripción del Dispositivo" id="txtDescripcion" required minlength="2">
                            <input type="text" class="form-control mt-4" placeholder="Observaciones" id="txtObservacion" required minlength="2">
                            <button type="submit" class="boton form-control ">Registrar</button>
                        </form>
                    </div>

                </div>
            </div>
            <?php include("../../componentesIncludes/footer.php");?>
        </div>
    </div>
    <script src="../../../backend/metodosJs/dispositivo.js"></script>
    <script src="../../../../public/js/app.js"></script>
</body>

</html>