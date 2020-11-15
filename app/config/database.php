<?php 
$conexion= new mysqli("localhost","ronaldo","abcdef12345.","BDAgua");
$acentos=$conexion->query("SET NAMES 'utf8'");
if($conexion ->connect_error){
    die('error en la cadena de conexion'.$conexion->connect_error);
}
?>