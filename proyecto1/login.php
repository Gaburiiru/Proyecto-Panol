
<?php
	include "config/conect.php";
	

    $usuario=$_REQUEST["usuario"]; 
    $clave=$_REQUEST["clave"];
	
    $sql= "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Clave = '$clave'";    
 
    if ($resultado= $con->query($sql)) {
		if($resultado->num_rows > 0){
			session_start();
            
            $user=$resultado->fetch_assoc();
            $_SESSION["user"]["nombre"]=$user['Usuario'];
            $_SESSION["user"]["id"]=$user['id'];
            $_SESSION["user"]["tipo"]=$user['Tipo'];
            $_SESSION["user"]["confP"]=$user['confirmadoP'];
            $_SESSION["user"]["confA"]=$user['confirmadoA'];
            
            if(($_SESSION["user"]["tipo"] == NULL) and ($_SESSION["user"]["confP"] == "si")  or ($_SESSION["user"]["confA"] == "si")){
                header("location: index.php");
            
            }else if(($_SESSION["user"]["tipo"] == NULL) and ($_SESSION["user"]["confP"] == NULL) and ($_SESSION["user"]["confA"] == NULL)){
                header("location: comprobante.php");
                
            }else if($_SESSION["user"]["tipo"] == "administradorP"){
                header("location: admin_panol/PANOL.PHP");
                
            }else if($_SESSION["user"]["tipo"] == "administradorA"){
                header("location: admin_ayud/ayudantia.php");
            }
            exit;
		}else{
			header("location: login.html");
           echo "bla";
		}
    }else {
        header("location: login.html");
		echo $con->error;
    }
       

?>