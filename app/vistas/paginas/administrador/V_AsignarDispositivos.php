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
    <h1 class="text-center">Asignar Dispositivos</h1>
    <div class="container">
        <form action="">
            <div class="row justify-content-center animated fadeInDown">
                <div class="col-md-5 col-sm-12 col-12">
                    <select  id="" class="form-control mt-4">
                        <option value="">Elige el contribuyente</option>
                    </select>
                </div>
                <div class="col-md-5 col-sm-12 col-12">
                    <select id="" class="form-control mt-4">
                        <option value="">Elige un dispositivo</option>
                    </select>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <button class="boton form-control ">Registrar</button>
                </div>
            </div>

        </form>


    </div>
</body>

</html>