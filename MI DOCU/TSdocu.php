
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
                <div class="dropdown-menu-button">&nbsp;&nbsp; Basicos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">      
                            <li><a href="TSdocu.php"> &nbsp;&nbsp;REGISTRAR TIPO  DE DOCUMENTO</a></li>
                            <li><a href="SUBtDOC.php"> &nbsp;&nbsp;REGISTRAR SUBTIPO  DE DOCUMENTO</a></li>
                    
                            </ul>
                        </li>    

                        <li>
                <div class="dropdown-menu-button">&nbsp;&nbsp; Proceso<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">  
                    <li><a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i>&nbsp;&nbsp;SUBIR ARCHIVO</a></li>
                    <li><a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i>&nbsp;&nbsp;SUBIR VARIOS ARCHIVOS</a></li>   
                    <li><a href="documento.php">&nbsp;DATOS DE DOCUMENTOS</a></li>    
                         <li><a href="lista_de_archivos.php">&nbsp;LISTA DE DATOS DE DOCUMENTOS</a></li>
                         <li><a href="lista.php">&nbsp; LISTA DE ARCHIVOS</a></li>
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
            
            <h1 class="all-tittles">Registrar Tipo de Documento</h1>
            </div>
        </div>
        
 
<!--Parte del formulario -->

<div class="container">
		<div class="row mt-3">
			<div class="col">
 
        <form action="regis.php" method="post">
			 					<div class="form-group col-md-7">
                        <label for="tipodoc">Tipo de Documento</label>
                        <input type="text" class="form-control"  name="tipodoc" id="tipodoc"required placeholder="Tipo de Documento">
                        
        </div>
                
     <div class="form-group col-md-12">
     <input  class="btn btn-primary" type="submit" name="submit" value="Enviar"/>
                              
</div>
  
                </form>
                
<?php
if(isset($_POST['submit'])){
require("regis.php");
}

?>
		
   
    
			</div>
		</div>
	</div>
   

</body>
 
 
</html>
 
  

  