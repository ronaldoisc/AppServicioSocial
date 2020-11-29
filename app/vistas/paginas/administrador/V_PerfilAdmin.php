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
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10 mt-5 pt-5">
                            <div class="row z-depth-3">
                                <div class="col-sm-4 bg-info rounded-left ">
                                    <div class="card-block text-center text-white ">
                                       
                                       <i class="fas fa-user-tie fa-7x mt-5"></i>
                                        <h2 class="font-weight-bold mt-4">Ronaldo Tellez</h2>
                                        <p>ADMINISTRADOR</p>
                                        <i class="far fa-edit fa-2x mb-4"></i>

                                    </div>
                                </div>
                                <div class="col-sm-8 bg-white rounded-right">
                                    <h1 class="mt-3 text-center">Información</h1>
                                    <hr class="badge-primary mt-0 w-25">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="font-weight-bold">Email:</p>
                                            <h6 class="text-muted">tellezleal9928@gmail.com</h6>

                                        </div>
                                        <div class="col-sm-6">
                                            <p class="font-weight-bold">Teléfono:</p>
                                            <h6 class="text-muted">+522321030318</h6>

                                        </div>
                                    </div>
                                    <h4 class="mt-3">Cargo</h4>
                                    <hr class="bg-primary">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="text-justify">Administrar el sitio web, para un mejor control de la información sobre el consumo de agua.</p>


                                        </div>
                                        <div class="col-sm-6">
                                            <p class="font-weight-bold">Ubicación:</p>
                                            <h6 class="text-muted">Teziutlán Puebla, Centro</h6>

                                        </div>
                                    </div>
                                    <hr class="bg-primary">
                                    <ul class="list-unstyled d-flex justify-content-center mt-4">
                                        <li><a href="#"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                                        <li><a href="#"><i class="fab fa-github px-3 h4 text-info"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../../public/js/app.js"></script>
</body>

</html>