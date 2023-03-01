<html>
    <head>
        <meta charset="utf-8">
    <link href="../css/estiloPANOL.css" rel="stylesheet" type="text/css">
</head>
<body>
       
        <?php
            include 'header.php';     
    
        ?>
         <center>
         
    <h2>Agrega una herramienta nueva</h2>
   
  
<form method="post" action="agregar.php">
<section class="agrega">
   <tr><td>Herramienta: <input type="Text" name="herramientas"></td></tr><br>
    <tr><td>Cantidad: <input type="Text" name="cantidad"></td></tr><br>
    </section>
    <br><br>
<input type="Submit" name="enviar" value="Aceptar">
    
</form>
         </center>
    <br><br>
    <br><br>
    <br>

<script src="../js/jquery-3.3.1.min.js"></script>
 <script src="../js/hearderMAMADISIMO.js"></script>    
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