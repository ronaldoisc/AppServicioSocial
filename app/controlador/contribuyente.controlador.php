<?php

if (!isset($_POST["accion"])) {
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
} else {
    include("../config/database.php");
    if ($_POST['accion'] == "registrarContribuyente") {
        $nombre      = $_POST['txtNombre'];
        $apepat      = $_POST['txtApepat'];
        $apemat      = $_POST['txtApemat'];
        $direccion   = $_POST['txtDireccion'];
        $numExt      = $_POST['txtNumExt'];
        $numInt      = $_POST['txtNumInt'];
        $curp        = $_POST['txtCurp'];
        $idLocalidad = $_POST['cmbLocalidad'];
        $correo      = $_POST['txtCorreo'];
        $telefono    = $_POST['txtTelefono'];
         
        $cmd=$conexion->prepare("insert into Contribuyentes (Nombre,ApellidoPaterno,ApellidoMaterno,Direccion,NoExterior,NoInterior,Curp,IdLocalidad,Correo,Telefono) values (?,?,?,?,?,?,?,?,?,?)");
        $cmd->bind_param("sssssssiss", $nombre, $apepat, $apemat, $direccion, $numExt,$numInt,$curp,$idLocalidad,$correo,$telefono);
        if ($cmd->execute()) {
            $Mensaje = array("Mensaje" => "ok");
            echo json_encode($Mensaje);
        } else {
            $Mensaje = array("Mensaje" => "error");
            echo json_encode($Mensaje);
        }
        
    } else if ($_POST["accion"] == "getEstados") {
        $cmd = "select * from Estados";
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $estados = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $estados[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($estados);
    } else if ($_POST['accion'] == 'getUbicacion') {
        $subAccion = $_POST["subaccion"];
        $IdEstado  = $_POST['id_estado'];
        $cmd = "select Municipios.Id,Municipios.Municipio from Municipios inner join Estados on Municipios.IdEstado=Estados.Id where ";
        if ($subAccion == "Municipios") {
            $cmd .= "Estados.Id=" . $IdEstado;
        }
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $municipios = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $municipios[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($municipios);
    } else if ($_POST['accion'] == 'getUbicacion2') {
        $subAccion   = $_POST["subaccion"];
        $IdEstado    = $_POST['id_estado'];
        $IdMunicipio = $_POST['id_municipio'];
        $cmd = "select localidades.id,localidades.nombre as localidad from localidades inner join Municipios on Municipios.Id=localidades.municipio_id inner join Estados on Estados.Id=Municipios.IdEstado where ";
        if ($subAccion == "localidades") {
            $cmd .= "Estados.Id=" . $IdEstado . " and Municipios.Id=" . $IdMunicipio;
        }

        $respuesta = $conexion->query($cmd);
        $i = 0;
        $localidades = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $localidades[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($localidades);
    }
}
