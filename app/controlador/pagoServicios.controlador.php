<?php 
if(!isset($_POST["accion"])){
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
}else{
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
    }else
    if ($_POST["accion"] == "getServicios") {
        $cmd = "select * from Servicios;";
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $servicios= array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $servicios[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($servicios);
    }else if($_POST["accion"] == "registrarPago"){
       
        $IdContribuyente = $_POST['cmbIdContribuyente'];
        $IdServicio    = $_POST['cmbIdServicio'];
        $FechaPago   = date("Y-m-d");
        $IdUsuario  = $_POST['txtIdUsuario'];
        if (isset($IdContribuyente) && isset($IdServicio) && isset($IdUsuario)) {
            $cmd = $conexion->prepare("insert into PagoServicios (IdContribuyente,IdServicio,FechaPago,IdUsuarioSistema) values (?,?,?,?)");
            $cmd->bind_param("iisi", $IdContribuyente,$IdServicio,$FechaPago,$IdUsuario);
            if ($cmd->execute()) {
                $Mensaje = array("Mensaje" => "ok");
                echo json_encode($Mensaje);
            } else {
                $Mensaje = array("Mensaje" => "error");
                echo json_encode($Mensaje);
            }
        }
    }else if($_POST["accion"] == "getContribuyente"){
      
       $IdContribuyente=$_POST["idContribuyente"];
        $cmd = "select * from Contribuyentes where Id= ".$IdContribuyente;
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $contribuyente = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $contribuyente[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($contribuyente);
    }
    else if($_POST["accion"] == "getServicio"){
      
        $IdServicio=$_POST["idServicio"];
         $cmd = "select * from Servicios where Id= ".$IdServicio;
         $respuesta = $conexion->query($cmd);
         $i = 0;
         $servicio = array();
         while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
             $servicio[$i] = $row;
             $i++;
         }
         header("Content-type: application/json; charset= utf8");
         echo json_encode($servicio);
     }
}
?>