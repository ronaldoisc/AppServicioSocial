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
                <h1 class="text-center">Nuevo Contribuyente</h1>
                <div class="container">
                    <form action="javascript:RegistrarContribuyente()">
                        <div class="row  animated fadeInUp">
                            <div class="col-md-6">
                                <label for="" class="font-weight-bold">Información Personal</label>
                                <input type="text" required class="form-control mt-0" minlength="3" id="txtNombre" placeholder="Ingresa tu Nombre">
                                <input type="text" required class="form-control mt-4" minlength="3" id="txtApepat" placeholder="Ingresa tu Apellido Paterno">
                                <input type="text" required class="form-control mt-4" minlength="3" id="txtApemat" placeholder="Ingresa tu Apellido Materno">
                                <input type="text" required class="form-control mt-4" minlength="18" id="txtCurp" placeholder="Ingresa tu curp">
                                <select class="form-control mt-4" id="cmbEstados"></select>
                                <select class="form-control mt-4" id="cmbMunicipios"></select>




                            </div>
                            <div class="col-md-6">
                                <label for="" class="font-weight-bold">Contacto</label>
                                <select class="form-control mt-0" id="cmbLocalidad"> </select>
                                <input type="text" required class="form-control mt-4" minlength="3" id="txtDireccion" " placeholder=" Ingresa tu Dirección">
                                <input type="text" required class="form-control mt-4" minlength="1" id="txtNumExt" placeholder="Ingresa tu NúmExterior">
                                <input type="text" required class="form-control mt-4" id="txtNumInt" placeholder="Ingresa tu NúmInterior">
                                <input type="email" required class="form-control mt-4" minlength="1" id="txtCorreo" placeholder="Ingresa tu Correo">
                                <input type="text" required class="form-control mt-4" minlength="10" id="txtTelefono" placeholder="Ingresa tu Telefono">
                            </div>

                        </div>
                        <div class="row justify-content-center mt-3 mb-5">
                            <div class="col-md-6">
                                <button class="boton form-control ">Registrar</button>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../../public/js/app.js"></script>
    <script src="../../../backend/metodosJs/contribuyente.js"></script>
</body>

</html>