<?php
if (!isset($_POST["accion"])) {
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
} else {
    include("../config/database.php");
    if ($_POST["accion"] == "getContribuyentes") {
        $cmd = "select * from Contribuyentes";
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $contribuyentes = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $contribuyentes[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($contribuyentes);
    } else if ($_POST["accion"] == "getDispositivos") {
        $cmd = "select * from Dispositivos";
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $dispositivos = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $dispositivos[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($dispositivos);
    } else if ($_POST["accion"] == "registrarAsinarDispositivo") {


        $IdDispositivo = $_POST["cmbIdDispositivo"];
        $IdContribuyente = $_POST["cmbIdContribuyente"];
        $FechaInscripcion = date("Y-m-d");
        if (isset($IdDispositivo) && isset($IdContribuyente)) {


            $cmd = $conexion->prepare("insert into DispositivoContribuyente (IdDispositivo,IdContribuyente,FechaInscripcion) values (?,?,?)");
            $cmd->bind_param("sis", $IdDispositivo, $IdContribuyente, $FechaInscripcion);

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
