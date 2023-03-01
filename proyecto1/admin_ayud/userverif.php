<?php 
include "conexion.php";

    $id = $_REQUEST['id'];
	$nombre= $_REQUEST['Nombre'];
	$apellido = $_REQUEST['Apellido'];
    $usuario = $_REQUEST['Usuario'];
    $conf = $_REQUEST['confirmadoA'];


for($verif= 0; $verif<count($id);$verif++){
    $SQL= "UPDATE usuarios SET Nombre = '".$nombre[$verif]."', Apellido = '".$apellido[$verif]."' , Usuario = '".$usuario[$verif]."', confirmadoA = '".$conf[$verif]."'
    WHERE id='".$id[$verif]."'";

    if(!$respuesta_comercio = $con->query($SQL)){
        echo $con->error;
    }else{

        header("Location: usuarios.php");

    }
}
?>