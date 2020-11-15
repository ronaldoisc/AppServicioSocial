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
    <h1 class="text-center">Registrar Servicios</h1>

    <div class="container">
        <div class="row justify-content-center animated fadeInUp">
            <div class="col-md-6 col-sm-12 col-12">
                <form action="">
                    <input type="text"   placeholder="Nombre del servicio" class="form-control mt-4" id="">
                    <input type="number" placeholder="Costo del servicio"  class="form-control mt-4" id="">
                    <select  class="form-control mt-4" id="">
                        <option value="">Tipo de servicio</option>
                    </select>
                    <button class="boton form-control ">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>