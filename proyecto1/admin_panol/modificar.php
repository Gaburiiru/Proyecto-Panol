
<?php 
include "conexion.php";

    $id = $_REQUEST['id'];
	$herramientas= $_REQUEST['herramienta'];
	$estado = $_REQUEST['estado'];
    $disponibilidad = $_REQUEST['disponibilidad'];



$SQL= "UPDATE herramientas_panol SET herramienta = '$herramientas', estado= '$estado' , disponibilidad = '$disponibilidad'
WHERE id='$id'";

if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}else{
	echo "Modificado Correctamente";
    //header("Location: PANOL.PHP");
    echo "";
}

?>

<a href="PANOL.PHP"> < -- Regresar