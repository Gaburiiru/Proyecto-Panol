<?php

include "CONEXION.php";

$id=$_REQUEST['id_tmp'];


$SQL="UPDATE herramientas_totales SET total_disponible = total_disponible+(SELECT cantidad_tmp FROM tmp WHERE id_tmp =$id) WHERE herramientas_totales.id = (SELECT id_producto FROM tmp WHERE id_tmp =$id)";
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}

$SQL="DELETE FROM tmp WHERE id_tmp =$id";
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}

//mysql_query("DELETE FROM tareas WHERE tarea=$tarea");
$con->close();
header ("location:mostrar.php");

?>

