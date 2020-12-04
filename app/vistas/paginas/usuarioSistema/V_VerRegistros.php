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
    include("../../componentesIncludes/navbarUsuario.php");
    ?>
   
    <link rel="stylesheet" href="../../../../public/css/estilos.css">
    <link rel="stylesheet" href="../../../../public/css/normalize.css">
    <div class="d-flex" id="wrapper">
        
         
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="text-center mt-2">Mis Registros</h1>
                <div class="container">
                    <div class="row" id="cuerpoCard">
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <script src="../../../../public/js/app.js"></script>
    <script src="../../../backend/metodosJs/misRegistros.js"></script>
</body>

</html>