<?php

$herramientas= $_REQUEST['herramientas'];
$estado= "completo";
$disponibilidad="verdadero";
$cantidad = $_REQUEST['cantidad'];

include "CONEXION.php";

for($i=0;$i<$cantidad;$i++){
    $sql = "INSERT INTO herr_ayud_unidad (herramienta, estado, disponibilidad) VALUES ('$herramientas', '$estado', '$disponibilidad')";
    $sql1 = "INSERT INTO herramienta_ayudantia (herramientas, cantidad, total_disponible) VALUES ('$herramientas', '$cantidad', '$cantidad')";
    
    if(!$error= $con-> query($sql)){
        echo $con->error;
        }
  
}
$id=0;
$sql= "SELECT * FROM herramienta_ayudantia WHERE herramientas = '$herramientas'";    
 
    if ($resultado= $con->query($sql)) {
		if($resultado->num_rows > 0){
            $user=$resultado->fetch_assoc();
            
            $id= $user['id'];
        }
    }
  
$SQL= "UPDATE herramienta_ayudantia SET cantidad = cantidad+$cantidad, total_disponible= total_disponible+$cantidad 
WHERE id='$id'";

if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}else{
    header("Location: ayudantia.php");
    echo "";
}
?>
