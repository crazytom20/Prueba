
<?php

include_once ('connect_db.php');
/* isset --> comprobamos si una variable esta definida */
if (isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE id = '$id'";
    $resul = mysqli_query($mysqli,$query);
 
    $datos = mysqli_fetch_row($resul);

    if (isset($_POST['editar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $ubigeo = $_POST['ubigeo'];
        $email = $_POST['email'];
        $password = $_POST['contrasena'];
       
 
        $sql = "UPDATE usuarios SET user = '$nombre', apellido = '$apellido', dni = '$dni',
        telefono = '$telefono', ubigeo = '$ubigeo',email = '$email',password = '$password'  where id = '$id'";

        $resultado = mysqli_query($mysqli,$sql);

        if ($resultado == 1) {
            header("Location:lista_usuarios.php");
        }
    }

} else {
    header("Location:editar_usuarios.php");
}

?>



<!DOCTYPE html>

<?php
session_start();
$id =$_SESSION['id'];
?>

<html lang="es">
<head>
<title>Inicio</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
	<link rel="stylesheet" href="csss/bootstrap.min.css">
	 
</head>
<body>

<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
             MI DOCU
            </div>

            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                 <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Gestión de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                <ul class="list-unstyled">
                    <li><a href="crearusuario.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp;Registar Nuevo Usuario</a></li>
                       <li><a href="lista_usuarios.php"><i class="zmdi zmdi-accounts"></i>&nbsp;&nbsp; Lista de usuarios</a></li>
           
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button">&nbsp;&nbsp; Ajustes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="#">&nbsp;&nbsp; Bitacora</a></li>
                            <li><a href="#">&nbsp;&nbsp; Estadisticas</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </div>



        

<div class="content-page-container full-reset custom-scroll-containers" >
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
             
                <li  class="tooltips-general exit-system-button" data-href="desconectar.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittlesl"> 
                        <a href="" style="color:#fff;" >Editar Perfil</a>
                    </span>
                </li>
                
             
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Bienvenid@: <?php echo $_SESSION["user"];?></span>
                    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                </li>
                </ul>
		</nav>
      
        <div class="container">
            <div class="page-header">
           
            <h1 class="all-tittles">EDITAR USUARIO</h1>
            </div>
        </div>
        



<!--Parte del formulario -->

<div class="container">
		<div class="row mt-3">
			<div class="col">

<form action="" method="post"> 
 

<div class="form-group col-md-7">
	<label for="nombre">Nombres</label>
    <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Nombres" value="<?php echo $datos['1'];?>">
    
</div>
                
<div class="form-group col-md-7">
    <label for="apellido">Apellidos</label>
    <input class="form-control" type="text" name="apellido" placeholder="Apellidos" value="<?php echo $datos['2'];?>">
 </div>
    
      <div class="form-group col-md-7">
                        <label for="dni">DNI</label>
                        <input class="form-control" type="number" name="dni" placeholder="DNI" value="<?php echo $datos['3'];?>">
     </div>

     <div class="form-group col-md-7">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?php echo $datos['4'];?>">
     </div>

     <div class="form-group col-md-7">
                        <label for="ubigeo">Ubigeo</label>
                        <input type="text" class="form-control" name="ubigeo" placeholder="ubigeo" value="<?php echo $datos['5'];?>">
     </div>
     <div class="form-group col-md-7">
                        <label for="email">Correo Electronico</label>
                        <input type="text" name="email"class="form-control" placeholder="email" value="<?php echo $datos['10'];?>">
     </div>
     <div class="form-group col-md-7">
                        <label for="contrasena">Contraseña</label>
                        <input type="text" class="form-control" name="contrasena" placeholder="Contrasena" value="<?php echo $datos['11'];?>">
     </div>
 
 
     <div class="form-group col-md-12">
     <button class="btn btn-primary" type="submit" name="editar">Guardar</button> 
    </div>
  
                </form>
                
                
       
    
			</div>
		</div>
	</div>
   

</body>
 
 
</html>
 
 