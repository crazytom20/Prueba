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
                <div class="dropdown-menu-button">&nbsp;&nbsp; Basicos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">      
                         <li><a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i>&nbsp;&nbsp;Subir Archivo</a></li>
                         <li><a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i>&nbsp;&nbsp;Subir varios Archivos</a></li>      
                            </ul>
                        </li>    

                        <li>
                <div class="dropdown-menu-button">&nbsp;&nbsp; Proceso<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">  
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
           
            <h1 class="all-tittles">DATOS DE DOCUMENTOS</h1>
            </div>
        </div>
        
<!--Parte del formulario -->

<div class="container">
		<div class="row mt-3">
			<div class="col">

<form action="datos.php" method="post"> 


                <div class="form-group col-md-7">

<?php 
include "connect_db.php";
$query_rol = mysqli_query($mysqli,"SELECT * FROM tipodocumento");
mysqli_close($mysqli);
$result_rol = mysqli_num_rows($query_rol);
?>
    <td>
    <label for="nombreTipoDocumento">Tipo de Documento</label>
    </td>
    <td>
    <select name="nombreTipoDocumento" id="nombreTipoDocumento" class="form-control">
    <option value="0">Elija un Tipo de Documento</option>
    <?php
    echo $option; 
    if($result_rol > 0)
    {
        while ($rol = mysqli_fetch_array($query_rol)) {
?>
        <option value="<?php echo $rol["idTipoDocumento"]; ?>"><?php echo $rol["nombreTipoDocumento"] ?></option>
<?php 
        }
        
    }
 ?>

</select>
</td>
</div>



<div class="form-group col-md-7">
<?php 
include "connect_db.php";
$query_rols = mysqli_query($mysqli,"SELECT * FROM subtipodocumento");
mysqli_close($mysqli);
$result_rols = mysqli_num_rows($query_rols);
?>
    
<label for="NombreSubTipoDocumento">Sub Tipo de Documento</label>

<select name="NombreSubTipoDocumento" id="NombreSubTipoDocumento" class="form-control">
<option value="0">Elija un SubTipo de Documento</option>
<?php
    echo $option; 
    if($result_rols > 0)
    {
        while ($rols = mysqli_fetch_array($query_rols)) {
?>
        <option value="<?php echo $rols["IdSubTipoDocumento"]; ?>"><?php echo $rols["NombreSubTipoDocumento"] ?></option>
<?php 
        }
        
    }
 ?>

</select>

</div>





<div class="form-group col-md-7">
  
                   
  <label for="rol">Rol</label>
<?php 

require("connect_db.php");
$query_dis = mysqli_query($mysqli ,"SELECT * FROM rol");
mysqli_close($mysqli );
$result_dis = mysqli_num_rows($query_dis);
?>
<select name="TipoRol" id="TipoRol" class="form-control">
<option value="0">Elija una opción</option>
<?php 
   if($result_dis > 0)
   {
       while ($dis = mysqli_fetch_array($query_dis)) {
?>

       <option value="<?php echo $dis["idrol"]; ?>"><?php echo $dis["TipoRol"] ?></option>
<?php 
       }		
   }
 
?>
</select>

</div> 

<div class="form-group col-md-7">
	<label for="emisor">Emisor</label>
    <input type="text" class="form-control" placeholder="Nombre" name="emisor" id="nombre">
</div>
                
                    <div class="form-group col-md-7">
                        <label for="propietario">Propietario</label>
                        <input type="text" class="form-control" name="propietario" required placeholder="Propietario">
                    </div>
    
      <div class="form-group col-md-7">
                        <label for="tituloNombre">Nombre del Titulo</label>
                        <input type="text" class="form-control"  name="tituloNombre" required placeholder="Nombre del titulo">
     </div>

     <div class="form-group col-md-7">
                        <label for="duracion">Duración</label>
                        <input type="number" class="form-control"   name="duracion"  required placeholder="Duracion">
     </div>

     <div class="form-group col-md-7">
                        <label for="fecha">Fecha</label>
                        <input type="number" class="form-control"   name="fecha"  required placeholder="Fecha">
     </div>
     <div class="form-group col-md-7">
                        <label for="fechaemision">Fecha de Emisión</label>
                        <input type="number" class="form-control" name="fechaemision" required placeholder="Fecha de Emision">
     </div>
     <div class="form-group col-md-7">
                        <label for="calificacion">Calificación</label>
                        <input type="number" class="form-control" name="calificacion" required placeholder="Calificacion">
     </div>

     <div class="form-group col-md-7">
             <label for="relacionado">Relacionado</label>
            <input type="text" class="form-control"name="relacionado" required placeholder="Doc Relacionado">
     </div>

     <div class="form-group col-md-7">
              <label for="regifolio">Registro en Folio</label>
              <input type="text" class="form-control" name="regifolio" required placeholder="Registro en folio">
     </div>
 
     <div class="form-group col-md-12">
     <input  class="btn btn-primary" type="submit" name="submit" value="Enviar"/>
                              
    </div>
  
                </form>
                
                
       
    
			</div>
		</div>
	</div>
   

</body>
 
 
</html>
 

                           

                       
                        

    