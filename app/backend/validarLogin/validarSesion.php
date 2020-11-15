<?php 
session_start();
include("../../config/database.php");
if(isset($_POST['txtUsuario']) && isset($_POST['txtPwd'])){
   
    $usuario=$_POST['txtUsuario'];
    $password=$_POST['txtPwd'];
    

    $cmd = $conexion -> prepare("select * from UsuariosSistema where Usuario=? and Pwd=?");
    $cmd->bind_param("ss",$usuario, $password);
    $cmd->execute();
    $cmd->store_result();
    $cmd->bind_result($Id, $Nombre,$Usuario, $Pwd);
    $cmd->fetch();


if($cmd->num_rows >0){
  
   $_SESSION['Id']=$Id;
   $_SESSION['Nombre']=$Nombre;
   if($_SESSION['Id']==1){
        header('location:../../vistas/paginas/administrador/V_InicioAdmin.php');
    }else{
        header('location:../../vistas/paginas/usuarioSistema/V_InicioUsuario.php');
    }

   
}else{
    echo "usuario/contrasena incorrectas";
}
}
?>