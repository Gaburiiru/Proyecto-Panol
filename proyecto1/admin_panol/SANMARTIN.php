<?php

include "CONEXION.php";

$tarea= $_REQUEST['t'];

$t= $_REQUEST['op'];

if($t=='insert'){
	$sql = "INSERT INTO tareas(id ,tarea) VALUES ('$id','$tarea')";

	if(!$error= $con-> query($sql)){
	    echo $con->error;
	    }
	else{
	    echo "Datos ingresados correctamente";
	    }
}

?>