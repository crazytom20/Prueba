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
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Gestión de Documentos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="subirdocumentos.php">SUBIR ARCHVIO</a></li>
                                <li><a href="subirvarios.php">SUBIR VARIOS ARCHIVOS</a></li>
                                <li><a href="galeriaprincipal.php">LISTA DE DOCUMENTOS</a></li>
                                <li><a href="docusuario.php">VINCULAR DOCUMENTOS</a></li>
               
                            </ul>
                    

                            <div class="dropdown-menu-button">&nbsp;&nbsp; CATEGORIAS</div>
                           
                        </li> 

                        <ul class="list-unstyled">
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; DOCUMENTOS PERSONALES BASICOS <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                            
                            <li><a href="dni.php">&nbsp;&nbsp;DNI</a></li>
                            <li><a href="partida.php">&nbsp;&nbsp;PARTIDA DE NACIMIENTO</a></li>
                            <li><a href="boletas.php">&nbsp;&nbsp;BOLETAS</a></li>
                        </ul>
            
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; DOCUMENTOS ESCOLARES <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                            
                            <li><a href="constancia_estudio.php">&nbsp;&nbsp;CONSTANCIA DE ESTUDIO</a></li>
                            <li><a href="libreta.php">&nbsp;&nbsp;LIBRETA DE NOTAS</a></li>
             
                        </ul>



                        <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; GRADOS Y TITULOS <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="bachiller.php">GRADO DE BACHILLER</a></li>
                            <li><a href="magister.php">GRADO DE MAGISTER</a></li>
                            <li><a href="doctorado.php"> GRADO DE DOCTORADO</a></li>
                       
           
                        </ul>
                       
                    </li> 


                    <li>
                    <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; CAPACITACIONES <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="diploma.php">DIPLOMA</a></li>
                        <li><a href="constanciaes.php">CONSTANCIAS</a></li>
                        <li><a href="certificados.php">CERTIFICADOS</a></li>
                      
       
                    </ul>
                   
                </li> 

                <li>
                <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; RECONOCIMIENTOS <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                <ul class="list-unstyled">
                    
   
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
           
            <h1 class="all-tittles">DATOS DE DOCUMENTOS PARA VINCULAR LOS ARCHIVOS </h1>
            </div>
        </div>
        
<!--Parte del formulario -->

<div class="container">
		<div class="row mt-3">
			<div class="col">

<form action="send.php" method="post"> 


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
<div class="form-group col-ms-6">
<a class="" href="" title="Crear Tipo de Documento"><i class="zmdi zmdi-book zmdi-hc-fw" style="color:orange; margin-top:42px;" ></i></a> 
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

<div class="form-group col-ms-6">
<a class="" href=""  title="Crear SubTipo de Documento"><i class="zmdi zmdi-book zmdi-hc-fw" style="color:orange; margin-top:47px;" ></i></a> 
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

<div class="form-group col-ms-6">
<a class="" href=""  title="Crear Rol"><i class="zmdi zmdi-book zmdi-hc-fw" style="color:orange; margin-top:52px;" ></i></a> 
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

<!-- VINCULACIÓN DE IMAGEN -->     
<div class="form-group col-md-7">
  
                   
  <label for="">VINCULAR DOCUMENTOS</label>
<?php 

require("connect_db.php");
$query_dis = mysqli_query($mysqli ,"SELECT id_documento,nombre_archivo FROM tbl_documentos where id='$id'");
mysqli_close($mysqli );
$result_dis = mysqli_num_rows($query_dis);
?>
<select name="docuid" id="nombre_archivo" class="form-control">
<option value="0">Elija una opción</option>
<?php 
   if($result_dis > 0)
   {
       while ($dis = mysqli_fetch_array($query_dis)) {
?>

       <option value="<?php echo $dis["id_documento"]; ?>"><?php echo $dis["nombre_archivo"] ?></option>
<?php 
       }		
   }
 
?>
</select>

</div> 


<div class="form-group col-md-7">
              <label for="nombre_archivos">Nombre del Archivo</label>
              <input type="text" class="form-control" name="nombre_archivos" required placeholder="Nombre del Archivo">
     </div>


<!--====================================-->

 
     <div class="form-group col-md-12">
     <input  class="btn btn-primary" type="submit" name="submit" value="Enviar"/>
                              
    </div>
  
                </form>
                
                
       
    
			</div>
		</div>
	</div>
   

</body>
 
 
</html>
 

                           

                       
                        

    