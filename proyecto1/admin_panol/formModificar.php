<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloPANOL.css"/>
        
    </head>
<body>
   <?php
            include 'header.php';     
    
        ?>
    <center>

    <div class="caja">
    <h2>Modifica tu Herramienta</h2>
<?php
include "conexion.php";

$modifid = $_REQUEST['id'];
    
    
$SQL= "SELECT id , herramienta, estado, disponibilidad FROM herramientas_panol WHERE id = $modifid";	
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}       

      
echo "<form action='modificar.php' method='post'>";
echo "<section class='secundaria'><Table class='tabla_datos'>";
if ($dato = $respuesta_comercio->fetch_assoc()){
	echo "<tr>";
	echo "<td><h3>id</h3><input type='text' class='texto' name='id' value='".$dato['id']."'> </td>";
	echo "<td><h3>nombre</h3><input type='text' class='texto' name='herramienta' value='".$dato['herramienta']."'> </td>";
	echo "<td><h3>estado</h3><input type='text'class='text' name='estado' value='".$dato['estado']."'> </td>";
	echo "<td><h3>disponibilidad</h3><input type='text' class='texto' name='disponibilidad' value='".$dato['disponibilidad']."'> </td>";
	
		
	echo "</select>";
	echo "</td>";
	echo "</tr>";
}
       
echo "</Table></section>";

         echo "<br><input type='submit' value='Guardar' class='boton'>";
        
echo "</form>";

?>
        </div>
            </center>
    </body>
</html>