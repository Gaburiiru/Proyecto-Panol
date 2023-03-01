<?php 
include "CONEXION.php";

$id=$_REQUEST['t'];

$SQL="DELETE FROM tareas_a WHERE id=$id";

if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}

//mysql_query("DELETE FROM tareas WHERE tarea=$tarea");
$con->close();
header ("location:tareas_a.php");
?>
