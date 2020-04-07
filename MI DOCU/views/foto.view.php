<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			 <?php
			 if (!empty($fotos['nombre_archivo'])) {
				echo $fotos['nombre_archivo'];
		 }else{
				echo $fotos['urlDoc'];
			 } ?></h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">

		
		<a href="galeriaprincipal.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
			
		</div>
		

	 

 
</div>
</form>


<iframe width="100%" height="800" src="/DOCS/DOCITO<?php echo $fotos['nombre_archivo']; ?>"></iframe>







		<!--td>TIPO DE DOCUMENTO</td>
		<td><select name="eleccion23" id="">
				<option value="0">CATEGORIAS</option>
				<option value="Completo">DOCUMENTOS PERSONALES BASICOS</option>
				<option value="Hojas">Hojas</option>
				<option value="Corteza">Corteza</option>
		
		</select></td>

		<button class="btn btn-success">Vincular imágen</button>
		
		</form-->
	</div>
 

	
 
	
	
	
	</iframe></div>

	
</body>
</html>