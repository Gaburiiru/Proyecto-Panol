
<html>
         <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <meta charset="utf-8">
             <title>Inicio </title>
        <link href="../css/estiloPANOL.css" rel="stylesheet" type="text/css">
    </head>
    <body>
   <?php
            include 'header.php';     
    
        ?>
        <center> 
        <h2>Historal de pedidos</h2>
        </center>
        <script src="../js/jquery-3.3.1.min.js"></script>
<?php
include "CONEXION.PHP";

$salida = "";

    $query = "SELECT * FROM historial INNER JOIN herramientas_totales on historial.id_producto = herramientas_totales.id ORDER BY session_id";

  

    if (!$resultado = $con->query($query)){
        echo $con->error;
       } 
    if ($resultado->num_rows>0) {
    	$salida.="<center><section class='historial'><table class='tabla_datos'>
    			<thead>
    				<tr id='herramienta'>
    					<td>ID</td>
    					<td>HERRAMIENTA</td>
    					<td>CANTIDAD</td>
                        <td>PROFESOR</td>
                        <td>SALON</td>
                        <td>FECHA</td>
    				</tr>

    			</thead>
  
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['herramientas']."</td>
    					<td>".$fila['cantidad_tmp']."</td>
    					<td>".$fila['session_id']."</td>
    					<td>".$fila['salon']."</td>
    					<td>".$fila['fecha']."</td>
                        
						<td><a href='eliminar.php?codigoproducto=".$fila['id']."'>eliminar</a></td>
    				</tr>";

    	}
    	$salida.="</tbody></table></section></center><br><br><br><br>";
    }else{
    	$salida.="<center><br>NO HAY DATOS :(";
    }


    echo $salida;

    $con->close();
?>

        
<script src="../js/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
        <script src="../js/hearderMAMADISIMO.js"></script>



    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="../js/jquery-3.3.1.min.js"></script>
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