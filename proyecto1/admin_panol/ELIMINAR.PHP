<?php 
include "CONEXION.php";

$id=$_REQUEST['codigoproducto'];

$SQL="DELETE FROM herramientas_panol WHERE id=$id";

if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}

//mysql_query("DELETE FROM productos WHERE codigoproducto=$id");
$con->close();
header ("location:PANOL.php");
?>
