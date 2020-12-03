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
    if(!isset($_SESSION["Id"]) || $_SESSION["Id"]==1){
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
            <h1 class="text-center">Modulo Usuarios</h1>

            <div class="container">
                <div class="row justify-content-center">

                </div>
            </div>
           
            </div>
            <?php include("../../componentesIncludes/footer.php");?>
        </div>
        
    </div>
   

    <script src="../../../../public/js/app.js"></script>

</body>
</html>