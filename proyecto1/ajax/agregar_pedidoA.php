<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
session_start();
$session_id= $_SESSION["user"]["nombre"];
if (isset($_POST['id'])){$id=$_POST['id'];}
if (isset($_POST['cantidad'])){$cantidad=$_POST['cantidad'];}
if (isset($_POST['salon'])){$salon=$_POST['salon'];}

	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
if (!empty($id) and !empty($cantidad) and (!empty($salon) and ($id == $id)))
{
$insert_tmp=mysqli_query($con, "INSERT INTO tmpa (id_producto,cantidad_tmp,session_id, salon) VALUES ('$id','$cantidad','$session_id', '$salon')");
    
$insert_historial=mysqli_query($con, "INSERT INTO historial_a (id_producto,cantidad_tmp,session_id, salon) VALUES ('$id','$cantidad','$session_id', '$salon')");

$desc=mysqli_query($con, "UPDATE herramienta_ayudantia SET total_disponible = total_disponible - $cantidad WHERE id= $id");

}
if (isset($_GET['id']))//codigo elimina un elemento del array
{
    $id=intval($_GET['id']);
    $resultado=mysqli_query($con, "SELECT cantidad_tmp, id_producto FROM tmpa WHERE id_tmp = $id");
    $fila= mysqli_fetch_assoc($resultado);
    $delete=mysqli_query($con, "DELETE FROM tmpa WHERE id_tmp='".$id."'");
    $add=mysqli_query($con, "UPDATE herramienta_ayudantia SET total_disponible = total_disponible +".$fila['cantidad_tmp']." WHERE id= ".$fila['id_producto']);
}


?>
<table class="table">
<tr>
	<th>CODIGO</th>
	<th>CANT.</th>
	<th>HERRAMIENTA</th>

</tr>
<?php
	$sumador_total=0;
	$sql=mysqli_query($con, "select * from herramienta_ayudantia INNER JOIN tmpa ON herramienta_ayudantia.id=tmpa.id_producto WHERE tmpa.session_id='".$session_id."' GROUP BY id_tmp, id, herramientas, cantidad");
	while ($row=mysqli_fetch_array($sql))
	{
	$id_tmp=$row["id_tmp"];
	$codigo_producto=$row['id'];
	$cantidad=$row['cantidad_tmp'];
	$nombre_producto=$row['herramientas'];
	$id_marca_producto=$row['cantidad'];
	

	
	
		?>
		<tr>
			<td><?php echo $codigo_producto;?></td>
			<td><?php echo $cantidad;?></td>
			<td><?php echo $nombre_producto;?></td>
			
			
			<td ><span class="pull-right"><a href="#" onclick="eliminar('<?php echo $id_tmp ?>')"><i class="glyphicon glyphicon-trash"></i></a></span></td>
		</tr>		
		<?php
	}

?>


</table>
			