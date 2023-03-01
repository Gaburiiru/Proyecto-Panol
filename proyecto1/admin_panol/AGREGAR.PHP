<?php

$herramientas= $_REQUEST['herramientas'];
$estado= "completo";
$disponibilidad="verdadero";
$cantidad = $_REQUEST['cantidad'];

include "CONEXION.php";

for($i=0;$i<$cantidad;$i++){
    $sql = "INSERT INTO herramientas_panol (herramienta, estado, disponibilidad) VALUES ('$herramientas', '$estado', '$disponibilidad')";
 

    if(!$error= $con-> query($sql)){
        echo $con->error;
        }

}
$id=0;
$sql= "SELECT * FROM herramientas_totales WHERE herramientas = '$herramientas'";    
 
    if ($resultado= $con->query($sql)) {
		if($resultado->num_rows > 0){
            $user=$resultado->fetch_assoc();
            
            $id= $user['id'];
        }
    }
  if(isset($id)){
$SQL= "UPDATE herramientas_totales SET cantidad = cantidad+$cantidad, total_disponible= total_disponible+$cantidad 
WHERE id='$id'";

if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}
  }else{
    //  $SQL="INSERT INTO herramientas_totales (herramientas, cantidad, total_disponible) VALUES ('$herramientas', '$cantidad', '$cantidad')";
    header("Location: PANOL.PHP");

}
?>
