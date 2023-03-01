<?php
include 'verificacion.php';
?>

<!DOCTYPE html>
<html>
 <head>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estiloPANOL.css">
	<title>PAÑOL</title>
</head>
<body>
  <?php 
    
    include "header.php";
        
    ?>
    <center>
    <h2>BUSQUEDA DE HERRAMIENTAS</h2>

<section class="buscar">
	<div class="formulario">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda">
	</div>
    <br><br>
	<div id="datos"></div>

    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/hearderMAMADISIMO.js"></script>
<script type="text/javascript" src="../js/jquery.min-p.js"></script>
<script type="text/javascript" src="../js/MAIN-a.JS"></script>
</section>
    </center>
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