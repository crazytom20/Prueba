<?php

	$tipodocu=$_POST['tipodoc'];
 
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
 
mysqli_query($mysqli,"INSERT INTO tipodocumento VALUES('','$tipodocu','','1')");
				//echo 'Se ha registrado con exito';
$mensaje = "Usuario registrado con exito";

	
?>