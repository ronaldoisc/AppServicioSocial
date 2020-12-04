<?php
if(!isset($_POST["accion"])){
    $respuesta = array(
        "Mensaje" => "Error al invovar las transacciones",

    );
}else{
    include("../config/database.php");
    if($_POST["accion"]=="getMisRegistros"){
        $Id = $_POST['id'];
        $cmd = "select PagoServicios.Id,Contribuyentes.Nombre,Contribuyentes.ApellidoPaterno,Contribuyentes.ApellidoMaterno,Servicios.NombreServicio,Servicios.Costo,FechaPago, UsuariosSistema.Nombre as usuario from PagoServicios inner join Contribuyentes on Contribuyentes.Id=PagoServicios.IdContribuyente inner join Servicios on Servicios.Id=PagoServicios.IdServicio inner join UsuariosSistema on UsuariosSistema.Id=PagoServicios.IdUsuarioSistema where UsuariosSistema.Id=".$Id." order by PagoServicios.Id desc;";
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $registros = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $registros[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($registros);
    }else if($_POST["accion"]=="getRegistro"){

        $Id = $_POST['id'];
        $cmd = "select Contribuyentes.Nombre,Contribuyentes.ApellidoPaterno,Contribuyentes.ApellidoMaterno,Contribuyentes.Direccion,Servicios.NombreServicio as Servicio,TipoServicio.Servicio as Tipo,TipoServicio.Descripcion,Servicios.Costo,FechaPago,UsuariosSistema.Nombre as Usuario,localidades.nombre as localidad from PagoServicios inner join Contribuyentes on Contribuyentes.Id=PagoServicios.IdContribuyente inner join Servicios on Servicios.Id=PagoServicios.IdServicio inner join TipoServicio on TipoServicio.Id=Servicios.IdTipoServicio inner join UsuariosSistema on UsuariosSistema.Id=PagoServicios.IdUsuarioSistema inner join localidades on localidades.Id=Contribuyentes.IdLocalidad where PagoServicios.Id=".$Id;
        $respuesta = $conexion->query($cmd);
        $i = 0;
        $registro = array();
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
            $registro[$i] = $row;
            $i++;
        }
        header("Content-type: application/json; charset= utf8");
        echo json_encode($registro);
    }

}
 ?>