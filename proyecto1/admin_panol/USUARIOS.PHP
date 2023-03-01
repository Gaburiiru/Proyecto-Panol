<html>
<head>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
    <link href="../css/estiloPANOL.css" rel="stylesheet" type="text/css">
	<title>Profesores</title>
</head>
    <body>
     <?php
            include 'header.php';     
    
        ?>
        <center>
        <h2>Adminidtra usuarios</h2>
    </center>


<?php
include "conexion.php";
  
$SQL= "SELECT * FROM usuarios WHERE Tipo IS NULL " ;	
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}       
   
echo "<form action='userverif.php' method='post'>";
echo "<center><section class='profes'><Table class='profe'>";
echo "<td><h1>ID</h1></td>";
echo "<td><h1>NOMBRE</h1></td>";
echo "<td><h1>APELLIDO</h1></td>";
echo "<td><h1>USUARIO</h1></td>";
echo "<td><h1>CONFIRMADO</h1></td>";
while ($dato = $respuesta_comercio->fetch_assoc()){
	echo "<tr>";
	
	echo "<td><input type='text' class='texto' name='id[]' value='".$dato['id']."'> </td>";
	echo "<td><input type='text' class='texto' name='Nombre[]' value='".$dato['Nombre']."'> </td>";
	echo "<td><input type='text'class='text' name='Apellido[]' value='".$dato['Apellido']."'> </td>";
	echo "<td><input type='text' class='texto' name='Usuario[]' value='".$dato['Usuario']."'> </td>";
	echo "<td><input type='text' class='texto' name='confirmadoP[]' value='".$dato['confirmadoP']."'> </td>";
	
		
	echo "</select>";
	echo "</td>";
	echo "</tr>";
}
       
echo "</Table></section></center>";

 echo " <br><center><input type='submit' value='Guardar' class='boton'></center>";

echo "</form>";

?>
            <script src="../js/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="../js/hearderMAMADISIMO.js"></script>


    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="../js/jquery-3.3.1.min.js"></script>
   
<br>
<br>
<br>
<br>
<footer>
		<div class="footer-container">
			<div class="footer-main">
                <?php
                    echo"<script>";
                    echo "toastr.info('Nuevo pedido', 'Notificacion',{
                    'progressBar': true,'positionClass': 'toast-bottom-right','closeButton': true,'newestOnTop': true });";
                    echo "</script>";
                ?>

				<div class="footer-columna">
					<h3>Dirección</h3>
					<span class="fa fa-map-marker"><p>6615. Bariloche - Argentina</p></span>
					<span class="fa fa-envelope"></span>
				</div>

				<div class="footer-columna">
					<h3>Sobre Nosotros</h3>
					<p>somos un grupo de jovenes que estuvo al borde de la muerte por culpa de la droga, pero gracias a dios encontramos el camino de vuelta a los brazos de nuestro señor.</p>
				</div>
			</div>
		</div>

		<div class="footer-copy-redes">
			<div class="main-copy-redes">
				<div class="footer-copy">
					&copy; 2019, Todos los derechos reservados - | CristianCorp. |.
				</div>
				<div class="footer-redes">
                    <p>Facebook:</p>
					<a href="#" ><img src="../img/logoface.png" height="50px" center></a>
				</div>
			</div>
		</div>
	</footer>
 </body>
    
</html>