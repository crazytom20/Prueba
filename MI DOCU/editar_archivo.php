<?php
include_once ('connect_db.php');
/* isset --> comprobamos si una variable esta definida */
if (isset($_GET['idDocumento'])){

    $id = $_GET['idDocumento'];
    $query = "SELECT * FROM documento WHERE idDocumento = '$id'";
    $resul = mysqli_query($mysqli,$query);
    /* mysql_fetch_row() recupera una fila de datos del resultado 
    asociado al identificador de resultados especificado. La fila es 
    devuelta como un array. Cada columna del resultado es almacenada 
    en un índice del array, empezando desde 0. */
    $datos = mysqli_fetch_row($resul);

    if (isset($_POST['editar'])) {


        $td = $_POST['a'];
        $std = $_POST['b'];
        $idu = $_POST['c'];
        $Emisor = $_POST['d'];
        $propie = $_POST['e'];
        $rol = $_POST['f'];
        $tit = $_POST['g'];
        $dur = $_POST['h'];
        $fech = $_POST['i'];
        $emi = $_POST['j'];
 
     
        $sql = "UPDATE documento SET idTipoDocumento = '$td', idSubTipoDocumento = '$std', id = '$idu',
        Emisor = '$Emisor',Propietario = '$propie',Rol = '$rol',TituloNombre = '$tit',
        DuracionHoras = '$dur', Fechas ='$fech',Fecha_de_Emision='$emi' where idDocumento = '$id'";

        $resultado = mysqli_query($mysqli,$sql);

        if ($resultado == 1) {
            header("Location:lista_de_archivos.php");
        }
    }

} else {
    header("Location:editar_archivo.php");
}


// $notas = "UPDATE examen SET promedio = '$promedio', condicion = '$condicion' where id = '$id'";
// $not = mysqli_query($conexion,$notas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csss/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">


                <!--a href="lista_de_archivos.php" class="navbar-brand">Regresar</a-->

	 

			<a href="#" class="navbar-brand">Editar Datos de Documentos</a>

				 
			</div>
		</div>
	</nav>
  
<!--Parte del formulario -->

<div class="container">
		<div class="row mt-5">
			<div class="col">
 
    <form action="" method="post" class="form-control"  >
       <table  class="form-control">
      <tr>
      <td>IdTipo de Documento: </td>
        <td> <input   type="text" name="a" class="form-control" placeholder="" value="<?php echo $datos['1'];?>"><br></td>

      </tr>

      <tr>
      <td>IdSubTipo de Documento:</td>
        <td><input class="form-control" type="text" name="b" placeholder="" value="<?php echo $datos['2'];?>"><br></td>
      </tr>

      <tr>
      <td>Id Usuario: </td>
      <td> <input class="form-control" type="number" name="c" placeholder=" " value="<?php echo $datos['3'];?>"><br></td>
      </tr>
           
           
      <tr>
      <td>Emisor: </td>
      <td> <input class="form-control" type="text" name="d" placeholder="" value="<?php echo $datos['4'];?>"><br></td>
      </tr>

      
      <tr>
      <td>Propietario:</td>
      <td>  <input class="form-control" type="text" name="e" placeholder="" value="<?php echo $datos['5'];?>"><br></td>
      </tr>
           

           
      <tr>
      <td>Rol:</td>
      <td><input class="form-control" type="text" name="f" placeholder="" value="<?php echo $datos['6'];?>"><br></td>
      </tr>
            
      <tr>
      <td>Nombre del Titulo:</td>
      <td><input class="form-control" type="text" name="g" placeholder="" value="<?php echo $datos['7'];?>"><br></td>
      </tr>

      <tr>
      <td>Duración:</td>
      <td><input class="form-control" type="text" name="h" placeholder="" value="<?php echo $datos['8'];?>"><br></td>
      </tr>

      <tr>
      <td>Fechas:</td>
      <td><input class="form-control" type="text" name="i" placeholder="" value="<?php echo $datos['9'];?>"><br></td>
      </tr>

      <tr>
      <td>Fecha de Emisión</td>
      <td><input class="form-control" type="number" name="j" placeholder="" value="<?php echo $datos['10'];?>"><br></td>
      </tr>

      <tr>
      <td> </td>
      <td><button class="btn btn-primary" type="submit" name="editar">Editar</button></td>
      </tr>
 
   
       </table>
 
</form>
</div>
		</div>
	</div>
   

</body>
</html>
 































































<!--!DOCTYPE html>

<!?php
session_start();
$id =$_SESSION['id'];
include_once "connect_db.php";
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
                    <span class="all-tittles">Bienvenid@: <!?php echo $_SESSION["user"];?></span>
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

<!--div class="container">
		<div class="row mt-3">
			<div class="col">

        <form action="archivitos.php" method="post"> 

<div class="form-group col-md-7"> 
	<label for="idTipoDocumento">Id Tipo Documento</label>
<input type="text" class="form-control" placeholder="Nombre" name="idTipoDocumento" value="<!?php echo $datos['1'];?>">   
</div>  

<div class="form-group col-md-7">
<label for="idSubTipoDocumento">ID SubTipo Documento</label>
    <input type="text" class="form-control" placeholder="Nombre" name="idSubTipoDocumento"  value="<!?php echo $datos['2'];?>">
 </div>
    
      <div class="form-group col-md-7">
      <label for="id">ID USUARIO</label>
    <input type="text" class="form-control" placeholder="Nombre" name="id"  value="<!?php echo $datos['3'];?>">
     </div>

     <div class="form-group col-md-7">
     <label for="Emisor">Emisor</label>
    <input type="text" class="form-control" placeholder="Nombre" name="Emisor" value="<!?php echo $datos['4'];?>">
     </div>

     <div class="form-group col-md-7">
     <label for="Propietario">Propietario</label>
    <input type="text" class="form-control" name="Propietario" required placeholder="Propietario" value="<!?php echo $datos['5'];?>">
     </div>
     <div class="form-group col-md-7">
     <label for="Rol">Rol</label>
    <input type="text" class="form-control" placeholder="Nombre" name="Rol"   value="<!?php echo $datos['6'];?>">
     </div> 

     <div class="form-group col-md-7">
     <label for="TituloNombre">Nombre del Titulo</label>
<input type="text" class="form-control"  name="TituloNombre" required placeholder="Nombre del titulo" value="<!?php echo $datos['7'];?>">
     </div>
    
     <div class="form-group col-md-7">
     <label for="DuracionHoras">Duración</label>
<input type="text" class="form-control"  name="DuracionHoras" required placeholder="Nombre del titulo" value="<!?php echo $datos['8'];?>">
     </div>
     <div class="form-group col-md-7">
    <label for="Fechas">Fechas</label>
    <input type="number" class="form-control"   name="Fechas"  required placeholder="Duracion"value="<!?php echo $datos['9'];?>">
     </div>

     <div class="form-group col-md-7">
    <label for="Fecha_de_Emision">Fecha de Emisión</label>
    <input type="number" class="form-control"   name="Fecha_de_Emision"  required placeholder="Fecha_de_Emision"value="<!?php echo $datos['10'];?>">
     </div>

     <div class="form-group col-md-7">
    <label for="Calificacion">Calificación</label>
    <input type="number" class="form-control" name="Calificacion" required placeholder="Calificacion"value="<!?php echo $datos['11'];?>">
     </div>

     <div class="form-group col-md-7">
             <label for="Documento_Relacionado">Relacionado</label>
            <input type="text" class="form-control"name="Documento_Relacionado" required placeholder="Doc Relacionado"value="<!?php echo $datos['12'];?>">
     </div>

     <div class="form-group col-md-7">
              <label for="Registro_folio">Registro en Folio</label>
              <input type="text" class="form-control" name="Registro_folio" required placeholder="Registro en folio" value="<!?php echo $datos['13'];?>">
     </div>
 
 
 
     <div class="form-group col-md-12">
     <button class="btn btn-primary" type="submit" name="cambiar">Editar</button> 
    </div>
  
                </form>
  
			</div>
		</div>
	</div>
   

</body>
 
 
</html-->
 
 




 

 