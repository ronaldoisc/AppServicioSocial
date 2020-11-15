<?php
if (!isset($_POST['accion'])) {
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
} else {
    include("../config/database.php");
    if ($_POST['accion'] == "registrarUsuarioSistema") {
        $nombre     = $_POST['txtNombre'];
        $usuario    = $_POST['txtUsuario'];
        $contrasena = $_POST['txtPwd'];

        $cmd = $conexion->prepare("insert into UsuariosSistema (Nombre,Usuario,Pwd) values (?,?,?)");
        $cmd->bind_param("sss",$nombre,$usuario,$contrasena);
        if ($cmd->execute()) {
            $Mensaje = array("Mensaje" => "ok");
            echo json_encode($Mensaje);
        } else {
            $Mensaje = array("Mensaje" => "error");
            echo json_encode($Mensaje);
        }
    }
}
