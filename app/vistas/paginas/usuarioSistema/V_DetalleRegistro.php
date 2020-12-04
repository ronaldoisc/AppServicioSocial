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

    <div class="container">
    <div class="text-lg-right mt-4">
    <button class="btn btn-danger" onclick="javascript:genPDF()">Descargar PDF</button>
    </div>
    <div id="imprimir">
    
    </div><!--ey-->
        
    </div>
    

<script src="../../../backend/metodosJs/detalleRegistro.js"></script>
</body>

</html>