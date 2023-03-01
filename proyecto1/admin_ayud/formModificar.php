<html>
    <head>
        <meta charset="utf-8">
         <link href="../css/estiloAYU.css" rel="stylesheet" type="text/css">
        
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

    <div class="caja">
    <h2>Modifica tu Herramienta</h2>
        <center>
<?php
include "conexion.php";

$modifid = $_REQUEST['id'];
    
    
$SQL= "SELECT id , herramienta, estado, disponibilidad FROM herr_ayud_unidad WHERE id = $modifid";	
if(!$respuesta_comercio = $con->query($SQL)){
	echo $con->error;
}       

      
echo "<form action='modificar.php' method='post'>";
echo "<section class='secundaria'><Table class='tabla_datos'>";
if ($dato = $respuesta_comercio->fetch_assoc()){
	echo "<tr>";
	echo "<td><h3>id</h3><input type='text' class='texto' name='id' value='".$dato['id']."'> </td>";
	echo "<td><h3>nombre</h3><input type='text' class='texto' name='herramienta' value='".$dato['herramienta']."'> </td>";
	echo "<td><h3>estado</h3><input type='text'class='text' name='estado' value='".$dato['estado']."'> </td>";
	echo "<td><h3>disponibilidad</h3><input type='text' class='texto' name='disponibilidad' value='".$dato['disponibilidad']."'> </td>";
	
		
	echo "</select>";
	echo "</td>";
	echo "</tr>";
}
       
echo "</Table></section>";

         echo "<br><input type='submit' value='Guardar' class='boton'>";
        
echo "</form>";

?>
        </div>
            </center>
    </body>
</html>