<html>
 <head>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
    <link href="../css/estiloAYU.css" rel="stylesheet" type="text/css">
	<title>Historial</title>
</head>
    <body>
   <header>
        <center>
            <div class="logo logo_main">Historial</div>
        </center>

        <div class="nav">
            <div class="wrap">
                <div class="logo logo_small">Historial</div>

                <nav>
                    <ul>
                        <li><a href="ayudantia.php">Buscar dispositivos</a></li>
                        <li><a href="formCargar.php">Agregar</a></li>
                        <li><a href="USUARIOS.PHP">Profesores</a></li>
                        <li><a href="MOSTRAR.PHP">Pedidos</a></li>
                        <li><a href="TAREAS_A.PHP">tareas</a></li>
                        <li><a href="../CHATS_A.PHP">chat</a></li>
                        <li><a class="c" href="LOGOUT.PHP">Cerrar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
        <center> 
        <h2>HISTORIAL:</h2>
        </center>

<?php
include "CONEXION.PHP";

$salida = "";

    $query = "SELECT * FROM historial_a INNER JOIN herramienta_ayudantia on historial_a.id_producto = herramienta_ayudantia.id ORDER BY session_id";

  

    if (!$resultado = $con->query($query)){
        echo $con->error;
       } 
    if ($resultado->num_rows>0) {
    	$salida.="<center><section class='historial'><table border=1 class='tabla_datos'>
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
    	$salida.="</tbody></table></section></center>";
    }else{
    	$salida.="<center>NO HAY DATOS :(";
    }


    echo $salida;

    $con->close();
?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="../menu-fijo-responsive-logo-ajustable-html5-css3-jquery-master/js/script.js"></script>

    

    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../menu-fijo-responsive-logo-ajustable-html5-css3-jquery-master/js/script.js"></script>

 </body>
    
</html>