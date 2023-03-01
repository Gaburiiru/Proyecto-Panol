<?php

include "CONEXION.php";

$tarea= $_REQUEST['t'];

$t= $_REQUEST['op'];

if($t=='insert'){
	$sql = "INSERT INTO tareas_a (tarea) VALUES ('$tarea')";

	if(!$error= $con-> query($sql)){
	    echo $con->error;
	    }
	else{
	    echo "Datos ingresados correctamente";
	    }
}

?>