<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       
    <link href="../css/estiloAYU.css" rel="stylesheet" type="text/css">
	<title>AYUDANTIA</title>
</head>
<body>
   <header>
        <center>
            <div class="logo logo_main">Todas los dispositivos</div>
        </center>

        <div class="nav">
            <div class="wrap">
                <div class="logo logo_small">Busqueda</div>

                <nav>
                    <ul>
                        <li><a href="formCargar.php">Agregar</a></li>
                        <li><a href="usuarios.php">Profesores</a></li>
                        <li><a href="MOSTRAR.PHP">Pedidos</a></li>
                        <li><a href="TAREAS_A.PHP">tareas</a></li>
                        <li><a href="historial.php">Historial</a></li>
                        <li><a href="../CHATS_A.PHP">chat</a></li>
                        <li><a class="c" href="LOGOUT.PHP">Cerrar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
<center>
    <br><br>
    <br><br>
<section class="buscar">
<center>
	<h2>BUSQUEDA DE DISPOSITIVOS</h2>

	<div class="formulario">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda">
<br><br>
		
	</div>
    

	<div id="datos"></div>
	
	</center>
</section>
</center>

    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/hearderMAMADISIMO.js"></script>
<script type="text/javascript" src="../js/jquery.min-p.js"></script>
<script type="text/javascript" src="../js/MAIN-p.JS"></script>
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