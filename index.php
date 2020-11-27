<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación web</title>
    <?php
    include("public/librerias/estilos.php");
    include("public/librerias/scripts.php");
    include("app/config/database.php");
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/estilos.css">


</head>

<body id="fondoLogin">
    <div class="container-fluid animated fadeInLeft mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-5 col-sm-12 col-12 mt-5 px-0 mx-0">
                <!--inicio primera columna-->
                <div class="card h-100 tarjeta-color rounded">
                    <!--<img class="card-img-top" src="holder.js/100x180/" alt="">-->
                    <div class="card-body">
                        <h4 class="card-title text-center text-black mt-3">BIENVENIDOS!</h4>
                        <div class="redes-sociales text-center ">
                            <a href=""><i class="fab fa-2x fa-facebook mr-2"></i></a>
                            <a href=""><i class="fab  fa-2x fa-linkedin-in mr-2"></i></a>
                            <a href=""><i class="fab  fa-2x fa-google-plus-g mr-2"></i></a>
                        </div>
                        <form action="app/backend/validarLogin/validarSesion.php" method="post">
                            <label for="" class="font-weight-500 mt-2">USUARIO</label>
                            <input type="text" required class="form-control p-4 text-center color-input" id="txtUsuario" name="txtUsuario">
                            <label for="" class="font-weight-500">CONTRASEÑA</label>
                            <input type="password" required class="form-control p-4 text-center color-input" id="txtPwd" name="txtPwd">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    recuerdame
                                </div>
                                <div class="col-md-5">
                                    ¿Olvidó tu contraseña?
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-4 col-12">

                                    <button type="submit" class="form-control rounded-pill bg-warning mt-4 botonLogin">INCIAR SESION</button>
                                </div>
                                <div class="col-md-6 col-sm-4 col-12">
                                    <a href="app/vistas/paginas/V_registroUsuario.php" class="form-control rounded-pill mt-4 text-center bg-warning text-decoration-none botonLogin">REGISTRATE</a>

                                </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--fin primera columna-->
        <div class="d-none d-md-block col-md-4 col-lg-4  mt-5 px-0 mx-0">

            <img src="https://i.blogs.es/b53e56/hands-water-poor-poverty/450_1000.jpg" alt="" class="w-100 h-100 rounded">
        </div>


    </div>
    </div>

 
</body>

</html>