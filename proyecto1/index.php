<?php
include 'verificacion.php';
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Inicio </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilo_indexbienchingon.css">
        <link rel="stylesheet" href="css/index.css">

	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    </head>
    
    <body><br>
         <h4><?php  echo "" . $_SESSION["user"]["nombre"] . "<br><br>"?></h4><br>
        <div class="log"><a class="log"href="logout.php" >Cerrar_Sesion</a></div>
            
        <br>

	<center>
	<div class="productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>Bienvenido</span></h2>
				<p class="titulo">¿A donde desea ir?</p>
			</article>

			<div class="col-12">
				<div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">
						<a href="PANOL.PHP"><figure class="producto">
							<img src="img/img_panol.jpg"  class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">PAÑOL</p>
							</figcaption>
						</figure></a>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<a href="ayudantia.PHP"><figure class="producto">
							<img src="img/9.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">AYUDANTIA</p>
							</figcaption>
						</figure></a>
					</article>
				</div>
			</div>
		</div>
        </center>

    <!--muestra pedidos de pañol-->
<?php
$session_id= $_SESSION["user"]["nombre"];

if (isset($_POST['id'])){$id=$_POST['id'];}
if (isset($_POST['cantidad'])){$cantidad=$_POST['cantidad'];}
if (isset($_POST['salon'])){$salon=$_POST['salon'];}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

	
if (!empty($id) and !empty($cantidad) and (!empty($salon) and ($id == $id)))
{
$insert_tmp=mysqli_query($con, "INSERT INTO tmp (id_producto, cantidad_tmp, session_id, salon) VALUES ('$id','$cantidad','$session_id', '$salon')");
    
$insert_historial=mysqli_query($con, "INSERT INTO historial (id_producto, cantidad_tmp, session_id, salon) VALUES ('$id','$cantidad','$session_id', '$salon')");

$desc=mysqli_query($con, "UPDATE herramientas_totales SET total_disponible = total_disponible - $cantidad WHERE id= $id");
}

if (isset($_GET['id']))//codigo elimina un elemento del array
{
	$id=intval($_GET['id']);
    $resultado=mysqli_query($con, "SELECT cantidad_tmp, id_producto FROM tmp WHERE id_tmp = $id");
    $fila= mysqli_fetch_assoc($resultado);
    $delete=mysqli_query($con, "DELETE FROM tmp WHERE id_tmp='".$id."'");
    $add=mysqli_query($con, "UPDATE herramientas_totales SET total_disponible = total_disponible+".$fila['cantidad_tmp']." WHERE id= ".$fila['id_producto']);
}


?>
        <center>
        <div class="pedidos">
            <h5>pedidos de pañol</h5>


<?php
	
	$sql=mysqli_query($con, "select * from herramientas_totales INNER JOIN tmp oN herramientas_totales.id=tmp.id_producto WHERE tmp.session_id ='".$session_id."' GROUP BY id_tmp, id, herramientas, cantidad");

    while ($row=mysqli_fetch_array($sql))
	{
        
	$id_tmp=$row["id_tmp"];
	$cantidad=$row['cantidad_tmp'];
	$nombre_producto=$row['herramientas'];
	$id_marca_producto=$row['cantidad'];
	
		?>
        <table class="table">
		<tr>
			<td><?php echo $cantidad;?></td>
			<td><?php echo $nombre_producto;?></td>
		</tr>		
		<?php
	}

?>
</table>
        </div>
            </center>
        
    <!--muestra pedidos de ayudantia-->
<?php

$session_id= $_SESSION["user"]["nombre"];
if (isset($_POST['id'])){$id=$_POST['id'];}
if (isset($_POST['cantidad'])){$cantidad=$_POST['cantidad'];}
if (isset($_POST['salon'])){$salon=$_POST['salon'];}

	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	
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


<center>
<div class="pedidos">
     <h5>pedidos de ayudantia</h5>
   

<?php
	$sumador_total=0;
	$sql=mysqli_query($con, "select * from herramienta_ayudantia INNER JOIN tmpa ON herramienta_ayudantia.id=tmpa.id_producto WHERE tmpa.session_id='".$session_id."' GROUP BY id_tmp, id, herramientas, cantidad");
	while ($row=mysqli_fetch_array($sql)){
	$id_tmp=$row["id_tmp"];
	$cantidad=$row['cantidad_tmp'];
	$nombre_producto=$row['herramientas'];
	$id_marca_producto=$row['cantidad'];
	
?>
    <center>
    <table class="table">

        <tr>
			<td><?php echo $cantidad;?></td>
			<td><?php echo $nombre_producto;?></td>
		</tr>
    
		<?php
	}
    
?>
    </table>
    </center>
</div>
</center>

        
    </body>
</html>