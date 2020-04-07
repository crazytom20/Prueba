
<?php
session_start();
	include("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username' or dni='$username'");
	mysqli_close($mysqli);
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			//$_SESSION['privilegios']=$f['privilegios'];

			echo '<script>alert("BIENVENIDO A MIS DOCUMENTOS")</script> ';

			//header("Location: usuario.php");
			header("Location: home.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}	
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}



?>