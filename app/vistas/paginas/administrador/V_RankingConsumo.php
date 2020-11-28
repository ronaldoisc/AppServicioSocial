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
    <div class="d-flex" id="wrapper">
        <?php
        include("../../componentesIncludes/sidebar.php");
        ?>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="text-lg-right">
                        <div>
                            <select name="" id="tipo" class="caja">
                                <option value="1">--------Filtrar por----------</option>
                                <option value="2">Contribuyente</option>
                                <option value="3">Localidades</option>
                                <option value="4">Municipios</option>
                            </select>
                            <button class="btn btn-danger" onclick="javascript:generate()">Descargar PDF</button>
                        </div>
                    </div>



                    <div id="contenido">
                        <div id="alerta">
                            <div class="alert alert-success" role="alert">
                                ! No hay Información para mostrar !
                            </div>
                        </div>

                        <table class="table table-hover" id="tabla">
                            <thead class="thead-dark" id="encabezado">

                            </thead>
                            <tbody id="tBody">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script src="../../../../public/js/app.js"></script>
    <script src="../../../backend/metodosJs/ranking.js"></script>
</body>

</html>