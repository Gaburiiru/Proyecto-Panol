<html>
<head>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
    <link href="../css/estiloAYU.css" rel="stylesheet" type="text/css">
	<title>Profesores</title>
</head>
    <body>
   <header>
        <center>
            <div class="logo logo_main">Profesores</div>
        </center>

        <div class="nav">
            <div class="wrap">
                <div class="logo logo_small">Profesores</div>

                <nav>
                    <ul>
                        <li><a href="ayudantia.php">Buscar dispositivos</a></li>
                        <li><a href="formCargar.php">Agregar</a></li>
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
        <h2>Administra usuarios</h2>
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
	echo "<td><input type='text' class='texto' name='confirmadoA[]' value='".$dato['confirmadoA']."'> </td>";
	
		
	echo "</select>";
	echo "</td>";
	echo "</tr>";
}
       
echo "</Table></section></center>";

 echo " <br><center><input type='submit' value='Guardar' class='boton'></center>";

echo "</form>";


?>


    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/hearderMAMADISIMO.js"></script>

 </body>
    
</html>