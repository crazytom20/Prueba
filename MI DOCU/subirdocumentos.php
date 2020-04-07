<?php

session_start();
//$id = $_SESSION['id'];
include_once 'connect_db.php';
    // Inclusión del archivo que contiene la funciona hacia_pagina()

    // Inicialización de la variable de mensaje
    $mensaje = '';

    // Tratamiento del formulario
    if (isset($_POST['ok'])) {
        // Recupera la información del archivo
        $informacion = $_FILES['archivo'];
        
        // Extrae su nombre
        $nombre = $informacion['name'];
        
        // Extrae su tipo MIME
        $tipo_mime = $informacion['type'];
        
        // Extrae su tamaño
        $tamanio = $informacion['size'];
        
        // Extrae su ubicación del archivo temporal
        $archivo_temporal = $informacion['tmp_name'];
        
        // Extrae el codigo de error
        $codigo_error = $informacion['error'];
        
        $id = $_SESSION['id'];

        $zona_horaria = "-5"; //Para perú, la zona horaria es GMT-5
     
        $formato = "Y-m-d H:i:s a"; //El formato de tu fecha. Checa en http://www.php.net/date
         
        $time = gmdate($formato,time()+($zona_horaria*3600));
        echo $time; 
      
 
 
        // Controles y tratamiento
        switch ($codigo_error) {
            case UPLOAD_ERR_OK:
            // Archivo bien recibido.
            // Determina su destino final
            $destino =  $_SERVER['DOCUMENT_ROOT'].'/DOCS/DOCITO'.$nombre;
            // Copia el archivo temporal (probar el resultado)
                
                if (@move_uploaded_file($archivo_temporal,$destino)) {
                // Copia OK => Mensaje de confirmación
                $sql = "INSERT INTO tbl_documentos(tamanio,tipo,nombre_archivo,urlDoc,Fecha_hora,id) 
                VALUES('$tamanio','$tipo_mime','$nombre','$destino','$time','$id') ";
                $query  = mysqli_query($mysqli,$sql);

                if ($query) {
                            echo "subido correctamente";
                         }
                    
                } else {
                    // Problema de copia => Mensaje de error
                    $mensaje = 'Problema al copiar en el servidor.';
                }
            break;
                
            case UPLOAD_ERR_NO_FILE:
            // Sin archivo
            $mensaje = 'Sin archivo.';
            break;
                
          case UPLOAD_ERR_INI_SIZE:
            // Tamaño archivo > UPLOAD_MAX_FILESIZE
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (tamaño > UPLOAD_MAX_FILESIZE).';
            break;
                
          case UPLOAD_ERR_FORM_SIZE:
            // Tamaño archivo > MAX_FILE_SIZE
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (tamaño > MAX_FILE_SIZE).';
            break;
                
          case UPLOAD_ERR_PARTIAL:
            // Archivo parcialmente transferido
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (problema durante la tranferencia).';
            break;
                
          case UPLOAD_ERR_NO_TMP_DIR:
            // Sin directorio temporal
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (sin directorio temporal).';
            break;
                
          case UPLOAD_ERR_CANT_WRITE:
            // Error durante de la escritura del archivo en disco
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (error durante la escritura del archivo en disco).';
            break;
                
          case UPLOAD_ERR_EXTENSION:
            // Transferencia detenida por la expresión
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (transferencia detenida por la expresión).';
            break;
                
          default:
            // Error no previsto
            $mensaje  = "Archivo no transferido ";
            $mensaje .= " (error desconocido: $codigo_error ).";
        }
    }
?>






<!DOCTYPE html>
<?php
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
/* Script written by Miguel Nunez @ minuvasoft10.com */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("archivo").files[0];
	//alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("archivo", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "subirdocumentos.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
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
                            
                            <li><a href="certificados.php">&nbsp;&nbsp;DNI</a></li>
                            <li><a href="#">&nbsp;&nbsp;PARTIDA DE NACIMIENTO</a></li>
                            <li><a href="#">&nbsp;&nbsp;BOLETAS</a></li>
                        </ul>
            
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; DOCUMENTOS ESCOLARES <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                            
                            <li><a href="certificados.php">&nbsp;&nbsp;CONSTANCIA DE ESTUDIO</a></li>
                            <li><a href="#">&nbsp;&nbsp;LIBRETA DE NOTAS</a></li>
             
                        </ul>



                        <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; GRADOS Y TITULOS <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="subirdocumentos.php">GRADO DE BACHILLER</a></li>
                            <li><a href="subirvarios.php">GRADO DE MAGISTER</a></li>
                            <li><a href="galeriaprincipal.php"> GRADO DE DOCTORADO</a></li>
                       
           
                        </ul>
                       
                    </li> 


                    <li>
                    <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; CAPACITACIONES <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="subirdocumentos.php">DIPLOMA</a></li>
                        <li><a href="subirvarios.php">CONSTANCIAS</a></li>
                        <li><a href="galeriaprincipal.php">CERTIFICADOS</a></li>
                      
       
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
            <?php echo $mensaje; ?>
            <h1 class="all-tittles">SUBIR UN ARCHIVO</h1>
            </div>
        </div>
        



<!--Parte del formulario -->



<div class="container">
		<div class="row mt-3">
			<div class="col">
            <form id="upload_image" action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                       
                        <div class="form-group col-md-6">  
                                <input size="300000000" type="file"   name="archivo"  id="archivo"  class="form-control-file">
                        </div>    
                </div>

 

                <div class="form-group col-md-12">
                    <input type="submit"  class="btn btn-primary" name="ok"  value="Enviar" onclick="uploadFile()"><br><br>
 
                    <progress id="progressBar" value="0" max="100" style="width:500px;"></progress>
                        <h3 id="status"></h3>
                        <p id="loaded_n_total"></p>
                    </div>
				 
				</form>
			</div>
		</div>
	</div>
	
  

 
   

</body>
 
 
</html>








 

 
 