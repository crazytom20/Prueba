
<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:home.php");
}

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
    
     
	<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();

				var current = $(this).attr('action');

				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}

				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
				}
			})
		});

        $(document).on('ready', function() {
			$('#show-hide-passwf').on('click', function(p) {
				p.preventDefault();

				var current = $(this).attr('action');

				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}

				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
				}
			})
		});


	</script>

	<style>
		.input-group {
			width: 100%;
			margin: 0 auto;
			margin-top: 1px;
		}
		span {
            cursor: pointer;
            
		}
	</style>
	 
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
            
            <h1 class="all-tittles">Registrar Nuevo Usuario</h1>
            </div>
        </div>
        



 


<!--Parte del formulario -->

<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="">
					<div class="form-group col-md-7">
                        <label for="realname">Nombres</label>
                        <input type="text" class="form-control"  name="realname" id="realname"required placeholder="Nombres">
                        
                    </div>
                    
                    <div class="form-group col-md-7">
                        
                        <label for="apellido">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" required placeholder="Apellidos">

                       </div>
    
      <div class="form-group col-md-7">
                        <label for="dni">DNI</label>
                        <input type="number" class="form-control"  name="dni" required placeholder="DNI">
     </div>

     <div class="form-group col-md-7">
                        <label for="telefono">Telefono</label>
                        <input type="number" class="form-control"  name="telefono" required placeholder="Teléfono">
     </div>

     <div class="form-group col-md-7">
                        <label for="nick">Correo Electrónico</label>
                        <input type="text" class="form-control"  name="nick" required placeholder="Correo Electrónico">
     </div>
     

     <div class="form-group col-md-7">
  
     <label for="departamentos">Departamento</label>
                    <?php 

require("connect_db.php");
$query_depar = mysqli_query($mysqli ,"SELECT * FROM departamentos ORDER BY Departamento");
mysqli_close($mysqli );
$result_depar = mysqli_num_rows($query_depar);
?>
<select name="departamentos" id="departamentos" class="form-control" >
<option value="0">Elija una opción</option>
<?php 
if($result_depar > 0)
{
    
    while ($depar = mysqli_fetch_array($query_depar)) {
?>

    <option value="<?php echo $depar["IdDepartamento"]; ?>"><?php echo $depar["Departamento"] ?></option>
<?php 
    }		
}
?>
</select>

  
      </div>



      <div class="form-group col-md-7">

      <label for="provincias"  >Provincia</label>
<?php 

require("connect_db.php");
$query_prov = mysqli_query($mysqli ,"SELECT * FROM provincias ORDER BY Provincia");
mysqli_close($mysqli );
$result_prov = mysqli_num_rows($query_prov);
?>
<select name="provincias" id="provincias" class="form-control">
<option value="0">Elija una opción</option>
<?php 
if($result_prov > 0)
{
    while ($prov = mysqli_fetch_array($query_prov)) {
?>
    <option value="<?php echo $prov["IdProvincia"]; ?>"><?php echo $prov["Provincia"] ?></option>
<?php 
    }		
}
?>
</select>

</div>


<div class="form-group col-md-7">


<label for="distritos"  >Distrito</label>
<?php 

require("connect_db.php");
$query_dis = mysqli_query($mysqli ,"SELECT * FROM distritos ORDER BY Distrito");
mysqli_close($mysqli );
$result_dis = mysqli_num_rows($query_dis);
?>
<select name="distritos" id="distritos" class="form-control">
<option value="0">Elija una opción</option>
<?php 
if($result_dis > 0)
{
    while ($dis = mysqli_fetch_array($query_dis)) {
?>

    <option value="<?php echo $dis["IdDistrito"]; ?>"><?php echo $dis["Distrito"] ?></option>
<?php 
    }		
}
?>
</select>

</div>



<div class="form-group col-md-7">

<label for="distritos">Sexo</label>
<select name="sexo" id="sexo" class="form-control">
<option value="0">Elija una opcion</option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>

</select>

</div>

 
<div class="form-group col-md-7">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control"  name="pass" required placeholder="Contraseña">
                        <!--span id="show-hide-passwd" action="hide" id="pass" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span--> 
     </div>

     <div class="form-group col-md-7">
                         <label for="rpass">Repetir Contraseña</label>
                         <input  type="password" class="form-control"  name="rpass" required placeholder="Repite Contraseña" ></input>
                        <!--span id="show-hide-passwf" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span--> 
     </div>
 
     <div class="form-group col-md-12">
     <input  class="btn btn-primary" type="submit" name="submit" value="Enviar"/>
                              
</div>
  
                </form>
                
<?php
if(isset($_POST['submit'])){
require("registro.php");
}

?>
		
   
    
			</div>
		</div>
	</div>
   

</body>
 
 
</html>
 
  

  