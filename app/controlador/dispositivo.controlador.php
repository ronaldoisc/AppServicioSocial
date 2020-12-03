<?php
if (!isset($_POST['accion'])) {
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
} else {
    include("../config/database.php");
    if ($_POST['accion'] == "agregarDispositivo") {
        $id            = $_POST['txtId'];
        $nombre        = $_POST['txtNombre'];
        $descripcion   = $_POST['txtDescripcion'];
        $fechaRegistro = date("Y-m-d");
        $observaciones = $_POST['txtObservacion'];
        if (isset($id) && isset($nombre) && isset($descripcion) && isset($observaciones)) {
            $cmd = $conexion->prepare("insert into Dispositivos (Id,Nombre,Descripcion,FechaRegistro,Observaciones) values (?,?,?,?,?)");
            $cmd->bind_param("sssss", $id, $nombre, $descripcion, $fechaRegistro, $observaciones);
            if ($cmd->execute()) {
                $Mensaje = array("Mensaje" => "ok");
                echo json_encode($Mensaje);
            } else {
                $Mensaje = array("Mensaje" => "vacio");
                echo json_encode($Mensaje);
            }
        }
    }
}
