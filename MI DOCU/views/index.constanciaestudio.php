<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">MIS ARCHIVOS</h1>
		</div>
	</header>
	
			
	<section class="fotos">
	<a href="home.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
		<div class="contenedor">
 
			<?php foreach($fotos as $foto):?>
				<div class="thumb">
					<a href="fconsta.php?id_documento=<?php echo $foto['id_documento']; ?>?>">
						<img src="/DOCS/DOCITO/<?php echo $foto['nombre_archivo']; ?>" alt=""><?php echo $foto['nombre_archivo'] ; ?> 
				 
					</a>
				</div>
			<?php endforeach;?>



			<div class="paginacion">
				<?php if ($pagina_actual > 1): ?>
					<a href="constancia_estudio.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<?php endif ?>

				<?php if ($total_paginas != $pagina_actual): ?>
					<a href="constancia_estudio.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif ?>

				<!-- <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<a href="#" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a> -->
			</div>
		</div>
	</section>

	 
</body>
</html>






