<?php 
include "connect_db.php";	

?>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
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
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="csss/bootstrap.min.css">
	<link rel="stylesheet" href="css/nuevo.css">

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
                    <span class="all-tittlesl"> 
                        <a href="" style="color:#fff;" >Editar Perfil</a>
                    </span>
                </li>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Bienvenido: <?php echo $_SESSION['user'];?></span>
                </li>
                      
            
                
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
		</nav>
		






	<div class="container">
		<div class="row">
			<div class="col">
			<?php 

			$busqueda = strtolower($_REQUEST['busqueda']);
			 


		 ?>
			<h1>Lista de Archivos</h1>

			<form action="buscar_documentos.php" method="get" class="form-inline">
		<input type="text"  class="form-control mr-2" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
 
		<button type="submit" class="btn btn-primary">Buscar</button><br>
		</form>
			
			 
		 <br>
				<table class="table table-bordered table-inverse table-hover table-reponsive">
					<!-- Tambien podemos cambiar el <thead> a oscuro con .thead-inverse -->
					<!-- Otra alternariva es .thead-default -->
					<thead class=" ">
					<tr class="bg-primary text-white">
					<th>Id</th>
					<th>Nombre</th>
					<th>Fecha / Hora</th>
					<th>Rol</th>
					<th>Acciones</th>
					</tr>
					</thead>

					<?php 



$rol = '';
			if($busqueda == '1')
			{
				$rol = " OR id LIKE '%1%' ";

			}else if($busqueda == '2'){

				$rol = " OR id LIKE '%2%' ";

			}else if($busqueda == '3'){

				$rol = " OR id LIKE '%3%' ";
			}


			$sql_registe = mysqli_query($mysqli,"SELECT COUNT(*) as total_registro FROM tbl_documentos 
																WHERE ( id_documento LIKE '%$busqueda%' OR 
																nombre_archivo LIKE '%$busqueda%' OR 
																Fecha_hora LIKE '%$busqueda%' OR 
																id LIKE '%$busqueda%' OR
																		$rol )");

	

			$total_registro = $sql_registe['total_registro'];

			$por_pagina = 5;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($mysqli,"SELECT t.id_documento,t.nombre_archivo,t.Fecha_hora, t.id FROM tbl_documentos t
										WHERE 
										( t.id_documento LIKE '%$busqueda%' OR 
                                        t.nombre_archivo LIKE '%$busqueda%' OR 
                                        t.Fecha_hora LIKE '%$busqueda%' OR 
										t.id LIKE '%$busqueda%' ) ORDER BY t.id_documento ASC LIMIT $desde,$por_pagina");
			mysqli_close($mysqli);
			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
					
			?>
			


			<tr class="">
					<th scope="row"><?php echo $data["id_documento"]; ?></th>
					<td><?php echo $data["nombre_archivo"]; ?></td>
					<td><?php echo $data["Fecha_hora"]; ?></td>
					<td><?php echo $data["id"]; ?></td>

					<td>

<a class="link_edit" href="#?id_documento=<?php echo $data["id_documento"]; ?>">Editar</a>

<?php if($data["id_documento"] != 1){ ?>
|
<a class="link_delete" href="#?id_documento=<?php echo $data["id_documento"]; ?>">Eliminar</a>
<?php } ?>

</td>
 
				</tr>
			
		<?php 
				}

			}
		 ?>


		</table>
 
<?php 
	
	if($total_registro != 0)
	{
 ?>
		<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>&busqueda=<?php echo $busqueda; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>&busqueda=<?php echo $busqueda; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'&busqueda='.$busqueda.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>&busqueda=<?php echo $busqueda; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>&busqueda=<?php echo $busqueda; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
<?php } ?>

</section>
         
		 <footer style="margin-top:100%;" class="footer full-reset">
	
			 <div class="footer-copyright full-reset all-tittles">© @INVENTALO</div>
		 </footer>
	 </div>
</body>
</html>