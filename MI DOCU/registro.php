<?php

	$realname=$_POST['realname'];
	$apellido=$_POST['apellido'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$departamentos=$_POST['departamentos'];
	$provincias=$_POST['provincias'];
	$distritos=$_POST['distritos'];
	$_SESSION['opcion']=$_REQUEST['sexo'];
	$sexo = $_SESSION['opcion'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];


	$ubigeo = $departamentos.$provincias.$distritos;

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$realname','$apellido','$dni','$telefono','$ubigeo','$departamentos','$provincias','$distritos','$sexo','$mail','$pass','0')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>