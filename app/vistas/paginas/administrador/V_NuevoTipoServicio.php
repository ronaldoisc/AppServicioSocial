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
    if(!isset($_SESSION["Id"]) || $_SESSION["Id"]>1){
        header('location:../../../../index.php');
    }
    include("../../../../public/librerias/estilos.php");
    include("../../../../public/librerias/scripts.php");
    include("../../componentesIncludes/navbar.php");
    ?>
    <link rel="stylesheet" href="../../../../public/css/estilos.css">
    <link rel="stylesheet" href="../../../../public/css/normalize.css">
    <div class="d-flex" id="wrapper">
        <?php
        include("../../componentesIncludes/sidebar.php");
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="text-center">Registra un tipo de Servicio</h1>
                <div class="container">
                    <div class="row justify-content-center animated fadeInRight">
                        <div class="col-md-6 col-12 col-sm-10">
                            <form action="javascript: RegistrarTipoServicio()">
                                <input type="text" placeholder="Tipo de servicio" class="form-control mb-4 mt-4" id="txtTipoServicio" required>
                                <textarea placeholder="Descripcion" class="form-control mb-4 mt-4" id="txtDescripcion" cols="30" rows="10"  required></textarea>
                                <button class="boton form-control ">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("../../componentesIncludes/footer.php");?>
        </div>
    </div>
    <script src="../../../backend/metodosJs/tipoServicio.js"></script>
</body>

</html>