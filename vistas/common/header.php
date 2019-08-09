<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Incluite</title>
	<link rel="icon" type="image/png" href="img/logo.png"/>
	
	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="<?= PATH_CSS ?>/bootstrap.min.css" rel="stylesheet">
  <link href="<?= PATH_CSS ?>/animate.min.css" rel="stylesheet">
  <link href="<?= PATH_CSS ?>/estilos.css" rel="stylesheet">

	
</head>
<body>
<header>
	<div id="nav" class="container-fluid px-0">
		<nav class="navbar navbar-expand-lg navbar-light" style= "background-color:#CDEBEF"> 
			<div class="row w-100">
				<div class="col-4 col-sm-3 d-flex flex-row">

					<img id="logo" src="img/logo.png" alt="Logo">
				 	
				 	<a class="navbar-brand d-none d-md-block" href="index.php">incluit<sub>e</sub> </a>	<!-- # me manda a la pantalla inicio, (d=display)+tamañoPantalla o none+block(mismaLínea)-->
				</div><!-- cierre del col logo -->
					<button class="navbar-toggler ml-auto d-md-none" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <!-- modificaciones van dentro del comillado de class-->
					<span class="navbar-toggler-icon"></span>
					</button>
				<div class="col-8 col-sm-9 d-flex flex-row">
				  <div class="collapse navbar-collapse d-md-block text-center" id="navbarNavAltMarkup">
				    <div class="navbar-nav d-flex justify-content-between text-uppercase">

				      <a class="nav-item nav-link active ml-3 oliver" href="index.php?m=index">Inicio <span class="sr-only">(current)</span></a>
				      <a class="nav-item nav-link ml-3 oliver" href="index.php?m=nosotros">Nosotros</a>
				      <a class="nav-item nav-link ml-3 oliver" href="index.php?m=cursos">Cursos</a>
				      <a class="nav-item nav-link disabled ml-3 oliver" href="index.php?m=porqueestudiarit" tabindex="-1" aria-disabled="true">¿Por qué estudiar IT?</a>

              <?php

              if(!isset($_SESSION['usuario'])){
              ?>                


        <!-- boton de login -->
        <div class="dropdown ">
                  <button class="btn btn-info dropdown-toggle ml-4" type="submit" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  <form action="helpers/validar.php" method="POST">
                  <a class="dropdown-item" href="#"><p>Usuario: <br><input type="text" name="usuario" required></p></a>
                  <a class="dropdown-item" href="#"><p>Contraseña:<br> <input type="password" name="password" required></p></a>

                  <input type="submit" class="btn btn-info btn-sm ml-4" value="INICIAR SESIÓN">
                  </form>
                  <hr>
                  <a class="ml-4 text-info" data-toggle="modal" href="conexion.php" data-target="#exampleModal" onclick="">¿NUEVO EN EL SITIO?</a>
                </div>
    			       

                 <!-- Formulario -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulario de inscripción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


<form action="helpers/guarda.php" method="POST">
  <div class="form-group row">
    <label for="nombre" class="col-4 col-form-label">Nombre</label> 
      <div class="col-8">
          <input id="nombre" name="nombre" type="text" class="form-control" required="required">
      </div>
    </div>

    <div class="form-group row">
    <label for="apellido" class="col-4 col-form-label">Apellido</label> 
      <div class="col-8">
          <input id="apellido" name="apellido" type="text" class="form-control" required="required">
      </div>
    </div>

  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            </div> 
        <input id="email" name="email" type="text" class="form-control" required="required">
          </div>
      </div>
   </div>

   <div class="form-group row">
    <label for="usuario" class="col-4 col-form-label">Usuario</label> 
      <div class="col-8">
          <input id="usuario" name="usuario" type="text" class="form-control" required="required">
      </div>
    </div>

  <div class="form-group row">
    <label for="pass" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="pass" name="pass" type="password" required="required" class="form-control" aria-describedby="passHelpBlock">
      </div> 
      <span id="passHelpBlock" class="form-text text-muted">Límite de caracteres:12</span>
    </div>
  </div> 
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>

							
              <?php
              }
              else{
              ?>

  <!-- boton de logout -->
               
                <div class="dropdown">
                  <button class="btn btn-info dropdown-toggle ml-4" type="submit" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION["usuario"] ?></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <form action="validar.php" method="POST" class="needs-validation" novalidate>
                       <a class="dropdown-item" href="#">CUENTA</a>
                       
                       <a class="dropdown-item" href="index.php?m=logout">LOGOUT</a> 
                      </form>
              <?php

              }
              ?>
						</div>
					   </ul>
				    </div> <!-- botones navbar -->
				  </div>
				</div> <!-- cierre del col menu -->

			</div><!-- cierre del row navbar -->
		</nav>
	</div> 
</div><!-- cierre del container navbar -->



</form>

</header>