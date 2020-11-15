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
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Mes</th>
                    <th>Estado</th>
                    <th>Litros</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nov</td>
                    <td>Puebla</td>
                    <td>6000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nov</td>
                    <td>Puebla</td>
                    <td>6000</td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-danger">Descargar PDF</button>
    </div>

</body>

</html>