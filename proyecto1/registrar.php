<?php
include "config/conect.php";

$nombre=$_REQUEST["Nombre"];
$apellido=$_REQUEST["Apellido"];
$usuario=$_REQUEST["Usuario"];
$clave=$_REQUEST["Clave"];
$correo=$_REQUEST["Correo"];

$SQL="SELECT * FROM usuarios WHERE Usuario='$usuario'";
if ( $resultado = $con->query($SQL)){
	if($resultado->num_rows>0){

        header("Location:registrar1.php?existe=si&Nombre=$nombre&Apellido=$apellido&Usuario=$usuario&correo=$correo");
	}
	else{
		$SQL="INSERT INTO usuarios (Nombre, Apellido, Usuario, Clave, correo) VALUES ('$nombre','$apellido','$usuario','$clave', '$correo')";
		if ( $resultado = $con->query($SQL)){
			echo "Esta todo bien";
			header("Location:comprobante.php");
		}
	}
}
?>