<?php 
if(!isset($_POST["accion"])){

}else{
    include("../config/database.php");
    if($_POST["accion"]=="consumoUsuarios"){
        $cmd = "select Contribuyentes.Nombre,Lecturas.FechaLectura,Municipios.Municipio,localidades.nombre as localidad,Lecturas.NoLitros
        from DispositivoContribuyente inner join Dispositivos on
         Dispositivos.Id=DispositivoContribuyente.IdDispositivo inner join 
         Contribuyentes on Contribuyentes.Id=DispositivoContribuyente.IdContribuyente
         inner join localidades on localidades.id=Contribuyentes.IdLocalidad inner join 
        Lecturas on Lecturas.IdDispositivo=Dispositivos.Id inner join Municipios
         on Municipios.Id=localidades.municipio_id where 
         Lecturas.FechaLectura=(select max(Lecturas.FechaLectura) from Lecturas) order by Lecturas.NoLitros desc;";
         $respuesta = $conexion->query($cmd);
         $i = 0;
         $usuariosConsumo = array();
         while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
             $usuariosConsumo[$i] = $row;
             $i++;
         }
         header("Content-type: application/json; charset= utf8");
         echo json_encode($usuariosConsumo); 
    }else if($_POST["accion"]=="consumoLocalidad"){
        $cmd="select Lecturas.FechaLectura,Municipios.Municipio,localidades.nombre as localidad,SUM(Lecturas.NoLitros) as litros
        from DispositivoContribuyente inner join Dispositivos on
         Dispositivos.Id=DispositivoContribuyente.IdDispositivo inner join 
         Contribuyentes on Contribuyentes.Id=DispositivoContribuyente.IdContribuyente
         inner join localidades on localidades.id=Contribuyentes.IdLocalidad inner join 
        Lecturas on Lecturas.IdDispositivo=Dispositivos.Id inner join Municipios
         on Municipios.Id=localidades.municipio_id where Lecturas.FechaLectura=(select max(Lecturas.FechaLectura) from Lecturas) 
         group by localidades.id order by litros desc;";
         $respuesta = $conexion->query($cmd);
         $i = 0;
         $localidadConsumo = array();
         while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
             $localidadConsumo[$i] = $row;
             $i++;
         }
         header("Content-type: application/json; charset= utf8");
         echo json_encode($localidadConsumo);
    }else if($_POST["accion"]=="consumoMunicipio"){
        $cmd="select Lecturas.FechaLectura as Fecha,Municipios.Municipio as Municipio,SUM(Lecturas.NoLitros) as Litros
        from DispositivoContribuyente inner join Dispositivos on
         Dispositivos.Id=DispositivoContribuyente.IdDispositivo inner join 
         Contribuyentes on Contribuyentes.Id=DispositivoContribuyente.IdContribuyente
         inner join localidades on localidades.id=Contribuyentes.IdLocalidad inner join 
        Lecturas on Lecturas.IdDispositivo=Dispositivos.Id inner join Municipios
         on Municipios.Id=localidades.municipio_id where Lecturas.FechaLectura=(select max(Lecturas.FechaLectura) from Lecturas) 
         group by Municipios.Id order by Lecturas.NoLitros desc;";

         $respuesta = $conexion->query($cmd);
         $i = 0;
         $municipioConsumo = array();
         while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
             $municipioConsumo[$i] = $row;
             $i++;
         }
         header("Content-type: application/json; charset= utf8");
         echo json_encode($municipioConsumo);
    }
}
