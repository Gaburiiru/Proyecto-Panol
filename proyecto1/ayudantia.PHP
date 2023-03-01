<?php
include 'verificacion.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ayudantia Virtual</title>
	<meta name="author" content="Obed Alvarado">
   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      
	
	<link href="css/select2.min.css" rel="stylesheet" />
    <link href="CSS/ayudantia.css" rel="stylesheet" type="text/css">
  </head>
  <body onload="eliminar(null)">
      <center>
	   <div class="container">
           <div id="navbar">
           <a href="index.php" >volver</a>
           <a href="CHATS_A.PHP" >chat</a>
           <a href="logout.php" >Cerrar Sesion</a>
           </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
           <div class="content">
         <section class="principal">
          <form>
		  <div class="row-fluid">
            <?php
                        echo   $_SESSION["user"]["nombre"];
              ?>
			<hr>                
			<form>
				<div class="col-md-12">
					<div class="pull-right">
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
						 <span class="glyphicon glyphicon-plus"></span> Agregar Dispositivos
						</button>
					</div>	
				</div>
			</form>
			<br><br>
              
		<div id="resultados" class='col-md-12'></div><!-- Carga los datos ajax -->
	           
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Buscar Dispositivos</h4>
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal">
					  <div class="form-group">
						<div class="col-sm-6">
						  <input type="text" class="form-control" id="q" placeholder="Buscar Dispositivos" onkeyup="load(1)">
						</div>
						
					  </div>
					</form>
					<div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="outer_div" ></div><!-- Datos ajax Final -->
				  </div>
                  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			<form action="salon.php" method="post">
              Salon
              <input type="text" placeholder="&#128272; Salon" name="salon" id="salon" required>
                <br>
	        </form>
               <br>
              </div>
             </form>
               </section>
           </div>
          </div>
      </center>
   <center>            
  <script src="js/jquery.min.js" ></script>
  <script src="js/boostrap.min.js" ></script>
                
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>

	<script src="js/select2.min.js"></script>
	<script>
		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			var parametros={"action":"ajax","page":page,"q":q};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/productos_pedidoA.php',
				data: parametros,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}
	</script>
       <script>
	function agregar (id)
		{
			
			var cantidad=$('#cantidad_'+id).val();
            var salon=$('#salon').val();
            var canDisp=$('#cod_'+id).html();
            
           
            if(salon == ""){
                alert('Rellene el campo');
            }
            if(canDisp>=cantidad){
			//Inicia validacion
			if (isNaN(cantidad))
			{
			alert('Esto no es un numero');
			document.getElementById('#cantidad_'+id).focus();
			return false;
			}
			if (isNaN(salon))
            {
            alert('Rellenar el campo');
            document.getElementById('#salon'+id).focus();
			return false;
            }
			//Fin validacion
            var parametros={"id":id,"cantidad":cantidad, "salon":salon};	
            $.ajax({
            type: "POST",
            url: "./ajax/agregar_pedidoA.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados").html("Mensaje: Cargando...");
              },
            success: function(datos){
            $("#resultados").html(datos);
		}
			});
		}
            else{
                alert("No hay herramientas disponible");
            }
        }
        
			function eliminar (id)
		{
			
        $.ajax({
        type: "GET",
        url: "./ajax/agregar_pedidoA.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}		

	</script>
      
     <script type="text/javascript">

      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {

      var currentScrollpos = window.pageYOffset;
      if(prevScrollpos > currentScrollpos) {
            document.getElementById("navbar").style.top = "0";
      } else {
            document.getElementById("navbar").style.top = "-100px";
      }

      prevScrollpos = currentScrollpos;

      }

      </script>
               
      </center>
    </body>
</html>