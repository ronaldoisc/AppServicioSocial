<?php
if (!isset($_POST["accion"])) {
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
} else {
    include("../config/database.php");
    if ($_POST["accion"] = "registrarTipoServicio") {
        $tipoServicio = $_POST["txtTipoServicio"];
        $descripcion = $_POST["txtDescripcion"];
        if (isset($tipoServicio) && isset($descripcion) && $tipoServicio!="" && $descripcion!="") {
            $cmd = $conexion->prepare("insert into TipoServicio (Servicio,Descripcion) values (?,?)");
            $cmd->bind_param("ss", $tipoServicio, $descripcion);
            if ($cmd->execute()) {
                $Mensaje = array("Mensaje" => "ok");
                echo json_encode($Mensaje);
            } else {
                $Mensaje = array("Mensaje" => "error");
                echo json_encode($Mensaje);
            }
        }
    }
}
