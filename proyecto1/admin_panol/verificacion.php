<?php
session_start();
if(isset($_SESSION["user"])){}
else{
header("location: f_login.php");
}
?>