<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
   
    <?php
     session_start();
    include("../../../public/librerias/estilos.php");
    include("../../../public/librerias/scripts.php");
    include("../componentesIncludes/navbar.php");
    include("../../config/database.php");
    ?>
     <link rel="stylesheet" href="../../../public/css/estilos.css">
</head>
<body>
    <div class="container ">
        <h1 class="text-center my-5">CREAR NUEVA CUENTA</h1>
    <div class="row justify-content-center animated fadeInRight">
        <div class="col-md-5 col-sm-6 col-11 m-r-2">
            <form action="javascript:Registrar()">
                <input type="text" class="form-control p-4 color-input" id="txtNombre" placeholder="Nombre" required minlength="3">
                <input type="text"  class="form-control mt-4 p-4 color-input" id="txtUsuario" placeholder="Usuario" required minlength="3">
                <input type="password"  class="form-control mt-4 p-4 color-input" id="txtPwd" placeholder="Contraseña" required minlength="6">
                <button type="submit" class="form-control boton " >Registrar</button>
            </form>
           
        </div>
    </div>
    </div>
    
   
    <script src="../../backend/metodosJs/usuario.sistema.js"></script>
</body>
</html>  