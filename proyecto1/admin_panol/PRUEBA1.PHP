 <?php
include "CONEXION.PHP";
$salida = "";

    $query = "SELECT * FROM herramientas_panol ";

    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM herramientas_panol WHERE id LIKE '%$q%' OR herramienta LIKE '%$q%' OR estado LIKE '%$q%' OR disponibilidad LIKE '$q' ";
    }

    if (!$resultado = $con->query($query)){
        echo $con->error;
       } 
    if ($resultado->num_rows>0) {
    	$salida.="<table border='1' class='tabla_datos'>
    			<thead>
    				<tr id='herramienta'>
    					<td>id</td>
    					<td>HERRAMIENTA</td>
    					<td>ESTADO</td>
                        <td> DISPONIBILIDAD</td>
    				</tr>

    			</thead>
  
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['herramienta']."</td>
    					<td>".$fila['estado']."</td>
    					<td>".$fila['disponibilidad']."</td>
                        
						<td><a class='modificar' href='formModificar.php?id=".$fila['id']."'>modificar</a></td>
                        <td><a href='eliminar.php?codigoproducto=".$fila['id']."'>eliminar</a></td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="<center>NO HAY DATOS :(";
    }


    echo $salida;

    $con->close();
?>
<html>
<link rel="stylesheet" href="../css/estiloPANOL.css">
</html>