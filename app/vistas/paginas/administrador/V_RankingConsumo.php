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
    include("../../../../public/librerias/estilos.php");
    include("../../../../public/librerias/scripts.php");
    include("../../componentesIncludes/navbar.php");
    include("../../../config/database.php");

    ?>
    <link rel="stylesheet" href="../../../../public/css/estilos.css">
    <link rel="stylesheet" href="../../../../public/css/normalize.css">
    <h1 class="text-center">Ranking de consumo de agua</h1>
    
    <div class="container">
    <select name="" id="tipo" class="mb-5">
    <option value="1">--Mostrar por--</option>
        <option value="2">Por usuario</option>
        <option value="3">Por localidad</option>
        <option value="4">Por Municipio</option>
    </select> 
        <div id="contenido">

            <table class="table table-striped" id="tabla">
                <thead class="thead-dark" id="encabezado">
                   
                </thead>
                <tbody id="tBody">
                  
                </tbody>
            </table>
        </div>
        <button class="btn btn-danger" onclick="javascript:generate()">Descargar PDF</button>
    </div>
    <script src="../../../backend/metodosJs/ranking.js"></script>
</body>

</html>