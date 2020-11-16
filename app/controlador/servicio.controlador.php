<?php 
if(!isset($_POST["accion"])){
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
}else{
    include("../config/database.php");
    if($_POST["accion"]=="registrarServicio"){
        $nombre=$_POST["txtNombre"];
        $costo=$_POST["txtCosto"];
        $idTipoServicio=$_POST["cmbIdTipoServicio"];

        $cmd=$conexion->prepare("insert into Servicios (NombreServicio,Costo,IdTipoServicio) values (?,?,?)");
        $cmd->bind_param("sii", $nombre,$costo,$idTipoServicio);
        if ($cmd->execute()) {
            $Mensaje = array("Mensaje" => "ok");
            echo json_encode($Mensaje);
        } else {
            $Mensaje = array("Mensaje" => "error");
            echo json_encode($Mensaje);
        }
    }else if($_POST["accion"]=="getTipoServicios"){
        $cmd = "select * from TipoServicio;";
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $tipoServicios = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $tipoServicios[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($tipoServicios);
    }
    

}

?>