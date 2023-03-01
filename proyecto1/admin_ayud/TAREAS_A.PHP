<!DOCTYPE html>
<html lang="en">
<head>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
    <link href="../css/estiloAYU.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Tareas</title>
</head>
    <body>
   <header>
        <center>
            <div class="logo logo_main">Tareas</div>
        </center>

        <div class="nav">
            <div class="wrap">
                <div class="logo logo_small">Tareas</div>

                <nav>
                    <ul>
                        <li><a href="ayudantia.php">Buscar dispositivos</a></li>
                        <li><a href="formCargar.php">Agregar</a></li>
                        <li><a href="MOSTRAR.PHP">Pedidos</a></li>
                        <li><a href="historial.php">Historial</a></li>
                        <li><a href="../CHATS_A.PHP">chat</a></li>
                        <li><a class="c" href="LOGOUT.PHP">Cerrar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
      <div class="row my-5">
        <div class="col-md-4">

          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form class="cuadro" id="formTask">
                <div class="form-group">
                  <input type="text" id="title" placeholder="Añade un titulo o Nombre" class="form-control">
                </div>
                <div class="form-group">
                  <textarea id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div id="tasks"></div>
        </div>
      </div>
    </div>
    <script src="../js/app.js"></script>

   <script src="../js/jquery-3.4.1.min.js" ></script>

    <script src="../js/hearderMAMADISIMO.js"></script>

    

    <i class="fas fa-ellipsis-v btn-menu"></i>

    <script src="../js/jquery-3.3.1.min.js"></script>



 </body>    
</html>