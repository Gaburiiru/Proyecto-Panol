<?php
include 'verificacion.php';
?>

<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "bdproyecto";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
    $query = "SELECT id_tmp, cantidad_tmp, herramientas, session_id, salon FROM tmp INNER JOIN herramientas_totales on tmp.id_producto = herramientas_totales.id ORDER BY session_id";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM tmp WHERE id_producto LIKE '%$q%' and cantidad_tmp'$q' ";
    }

   if( !$resultado = $conn->query($query)){
       echo $conn->error;
   }
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estiloPANOL.css">

    <link rel="stylesheet" href="../css/toastr.min.css">

    <title>pedidos</title>
</head>

<body>
   <?php
            include 'header.php';     
    
        ?>
    <!--<div class="button">
        <a href="stock.php"><input type="button" value="actualizar stock" ></a>   </div>
    <style>>
        .button{
            padding: 20px;
            position: absolute;
            right:5%;
        }
    </style>-->
    <center>
        <br>
        <br>
        <br>
        <br>
        <h2>Pedidos Recibidos</h2>
        <br>
    </center>

    <script src="../js/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="../js/hearderMAMADISIMO.js"></script>

    
    <script src="../js/toastr.min.js"></script>


    <?php
    if ($resultado->num_rows>0) {
    	
		$a=true;
    	$fila = $resultado->fetch_assoc();
        while($a){
            $usuarioaux=$fila['session_id'];
            
            $salida.="<center><section class='pedidos'><center><table  border='1' class='tabla_datos'>
    			<thead>
    				<tr  bgcolor='#e1e5e6' id='herramienta'>
    					<td>Nª PEDIDO</td>
    					<td>CANTIDAD</td>
						<td>HERRAMIENTA</td>
                        <td>PROFESOR</td>
                        <td>SALON</td>
    				</tr>

    			</thead>
    			
    	<tbody>";
            while($usuarioaux==$fila['session_id']){
                
                $salida.="<tr>

                            <td>".$fila['id_tmp']."</td>
                            <td>".$fila['cantidad_tmp']."</t>
                            <td>".$fila['herramientas']."</t>
                            <td>".$fila['session_id']."</t>
                            <td>".$fila['salon']."</t>
                            <td><a href='confPedido.php?id_tmp=".$fila['id_tmp']."'>eliminar</a></td>
                            
                         </tr>";
                    if($fila = $resultado->fetch_assoc())
                        $a=true;
                    else
                        $a=false;
                }
            $salida.="</tbody></table></center></section></center><br><br>";
            
            echo"<script>";
            echo "toastr.info('Nuevo pedido', 'Notificacion',{
            'progressBar': true,'positionClass': 'toast-bottom-right','closeButton': true,'newestOnTop': true });";
            echo "</script>";
            
            }

        
    }else{
    	$salida.="<center><br>NO HAY DATOS :( </center>";
    }


    echo $salida;

    $conn->close();
?>

    <!--<script>
    (function(){
        setInterval(
        function(){
            document.location.reload()
        },
        5000)
    })()
</script>-->


    <i class="fas fa-ellipsis-v btn-menu"></i>

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
