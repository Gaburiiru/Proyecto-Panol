<?php
    include "config/dbCHAT.php";
?>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="css/estiloChat.css">  
        <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
        
        <script type="text/javascript" >
            function ajax(){
                var req = new XMLHttpRequest();
                
                req.onreadystatechange = function(){
                    if(req.readyState == 4 && req.status == 200){
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
                
                req.open('GET', 'chat.php', true);
                req.send();
            }
        
            //refresca la pagina cada segundo
            setInterval(function(){ajax();}, 1000);
            
            
        </script>
        <br>
    </head>
    <body onload="ajax();">
        
        <div id="contenedor">
            <div id="caja-chat">
                <div id="chat"></div>
            </div>
            <form method="post" action="chats.php">
                <input type="text" name="nombre" placeholder="Ingrese su nombre">
                <textarea name="mensaje" placeholder="Ingrese el mensaje"> </textarea>
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
            //Si se pulsa el boton, envia los datos a la BBDD
                if(isset($_POST['enviar'])){
                    $nombre = $_POST['nombre'];
                    $mensaje = $_POST['mensaje'];
                    
                    $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
                    $ejecutar = $conexion->query($consulta);
                    
                    if($ejecutar){
                        echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";//Si la consulta se ejecuta correctamente, llama al sonido (beep.mp3) 
                    }
                }
            ?>
        </div>
    </body>
</html>