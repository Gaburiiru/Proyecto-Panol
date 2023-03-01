<?php

include "CONEXION.php";

$id=$_REQUEST['id_tmp'];


$SQL="UPDATE herramienta_ayudantia SET total_disponible = total_disponible+(SELECT cantidad_tmp FROM tmpa WHERE id_tmp =$id) WHERE herramienta_ayudantia.id = (SELECT id_producto FROM tmpa WHERE id_tmp =$id)";
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}

$SQL="DELETE FROM tmpa WHERE id_tmp =$id";
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}

//mysql_query("DELETE FROM tareas WHERE tarea=$tarea");
$con->close();
header ("location:mostrar.php");

?>

