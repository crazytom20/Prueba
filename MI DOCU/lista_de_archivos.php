<!DOCTYPE html>
<?php 
	session_start();
	include "connect_db.php";	
 ?>
<html lang="es">
<head>
<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="css/nuevo.css">
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


    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
             
                <li  class="tooltips-general exit-system-button" data-href="desconectar.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
             
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Bienvenido: <?php echo $_SESSION["user"];?></span>
                </li>
                   
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittlesl"> 
                        <a href="" style="color:#fff;" >Editar Perfil</a>
                    </span>
                </li>
                
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
		</nav>
		






	<div class="container">
		<div class="row">
			<div class="col">
			<h1>LISTA DE DATOS DE DOCUMENTOS</h1>
			
			<form action="buscardoc.php" method="get" class="form-inline">
					<input type="text"  class="form-control mr-2" name="busqueda" id="busqueda" placeholder="Buscar">
					<button type="submit" class="btn btn-primary">Buscar</button><br>
				 
			</form>
		 <br>
				<table class="table table-bordered table-inverse table-hover table-reponsive">
					<!-- Tambien podemos cambiar el <thead> a oscuro con .thead-inverse -->
					<!-- Otra alternariva es .thead-default -->
					
					<thead class=" ">
					<tr class="bg-primary text-white">
					<th>IDDOC</th>
					<th>id</th>
					<th>Emisor</th>
					<th>Propietario</th>
					<th>Nombre del Titulo</th>
				 
					<th>Acciones</th>
					</tr>
						</thead>


					<?php 
				$sql_registe = mysqli_query($mysqli,"SELECT COUNT(*) as total_registro FROM documento");
				$result_register = mysqli_fetch_array($sql_registe);
				$total_registro = $result_register['total_registro'];
	
				$por_pagina = 22;
	
				if(empty($_GET['pagina']))
				{
					$pagina = 1;
				}else{
					$pagina = $_GET['pagina'];
				}
	
				$desde = ($pagina-1) * $por_pagina;
				$total_paginas = ceil($total_registro / $por_pagina);
	
				$query = mysqli_query($mysqli,"SELECT o.idDocumento,o.id,o.Emisor,d.Propietario,o.TituloNombre FROM documento o ORDER BY o.idDocumento ASC LIMIT $desde,$por_pagina");
	
				mysqli_close($mysqli);
	
				$result = mysqli_num_rows($query);
				if($result > 0){
	
					while ($data = mysqli_fetch_array($query)) {
						
				?>
	
	

					<tr class="">
					<th scope="row"><?php echo $data["idDocumento"]; ?></th>
					<td><?php echo $data["id"]; ?></td>
					<td><?php echo $data["Emisor"]; ?></td>
					<td><?php echo $data["Propietario"]; ?></td>
					<td><?php echo $data["TituloNombre"]; ?></td>
				 

					<td>
					<a class="link_edit" href="editar_archivo.php?idDocumento=<?php echo $data["idDocumento"]; ?>"><i class="zmdi zmdi-book zmdi-hc-fw" style="color:orange;"></i></a>

<?php if($data["idDocumento"] != 1){ ?>
	|
	<a class="link_delete" href="#?idDocumento=<?php echo $data["idDocumento"]; ?>">Eliminar</a>
<?php } ?>
</td>
 
				</tr>
			
		<?php 
				}

			}
		 ?>


		</table>

		<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
 
	</section>
 
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>

 
 

 