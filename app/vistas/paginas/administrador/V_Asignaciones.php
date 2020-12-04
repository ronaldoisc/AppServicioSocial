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

    <div class="d-flex" id="wrapper">
        <?php
        include("../../componentesIncludes/sidebar.php");
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="mt-5">
                    <h3 class="text-center mb-4">Lista de Asignaciones</h3>
                <table class="table table-striped" id="tabla">
                    <thead class="thead-dark" id="encabezado">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Dispositivo</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">

                    </tbody>
                </table>
                </div>
               
            </div>
            <?php include("../../componentesIncludes/footer.php"); ?>
        </div>
    </div>
    <script src="../../../backend/metodosJs/asignarDispositivos.js"></script>
    <script src="../../../../public/js/app.js"></script>

</body>

</html>