<?php
$nombre="";
$apellido="";
$usuario="";
$clave="";
$correo="";
$error="";

if(isset($_REQUEST["existe"])){
	$usuario=$_REQUEST["Usuario"];
    $correo=$_REQUEST["correo"];
   
	
	$error="<h1>Ya existe el usuario</h1>";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gestor Virtual</title>
  <link rel="stylesheet" href="css/estiloRegistro.css">
  <link rel="icon"  type="image/jpg" href="img/charmander.jpg">   
  <meta name="viewport" content="width=device-width, initial-scalable=1">    
</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Registro</div>
      <div class="eula">Logueese por favor</div>
    </div>
    <div class="right">
        <!--
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#2a232a;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
-->
        <form action="registrar.php" method="post">
     <div class="form">
          
        <label for="email">Nombre</label>
        <input type="text" name="Nombre" id="nombre"  required>
          
        <label for="password">Apellido</label>
        <input type="text" name="Apellido" id="apellido" required>
          
        <label for="password">Usuario</label>
        <input type="text" name="Usuario" id="user" value=" <?php echo $usuario ?>" required>
          
        <label for="password">Contrase??a</label>
        <input type="password" name="Clave" id="pass" required> 
          
        <label for="password">Correo Electronico</label>
        <input type="text" name="Correo" id="email" value= "<?php echo $correo?>" required>
      	<br>
	   <?php echo $error
	   ?>
          
        <input type="submit" id="submit" value="Registrar">
          <p>??Ya tienes cuenta?<a class="registrate_aqui" href="login.html">Inicie Sesion</a></p>
          
      </div>
     </form>
    </div>
  </div>
</div>
<!--
  <script src="js/anime.min.js"></script>
<script  src="js/log_script.js"></script>
-->
</body>
</html>