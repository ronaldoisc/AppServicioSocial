<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Básico</title>

    <link rel="stylesheet" href="../../../../public/css/estilos.css">

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
    <div class="d-flex" id="wrapper">
        <?php
        include("../../componentesIncludes/sidebar.php");
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="text-center mt-4">Modulo Administrador</h1>
            </div>
            <?php include("../../componentesIncludes/footer.php");?>
        </div>
    </div>

    <script src="../../../../public/js/app.js"></script>
</body>

</html>