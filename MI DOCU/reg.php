<?php

	$subtipodocu=$_POST['subtipodoc'];
    $tipodoc = $_POST['nombreTipoDocumento'];
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
 
mysqli_query($mysqli,"INSERT INTO subtipodocumento VALUES('','$tipodoc','$subtipodocu','','1')");
				//echo 'Se ha registrado con exito';
$mensaje = "Usuario registrado con exito";

	
?>