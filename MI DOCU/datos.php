 
<?php
 session_start();
$id  = $_SESSION['id'];
$tipodoc = $_POST['nombreTipoDocumento'];
$subtipodoc = $_POST['NombreSubTipoDocumento'];
$emisor=$_POST['emisor'];
$propietario=$_POST['propietario'];
$tituloNombre=$_POST['tituloNombre'];
$rols  =$_POST['TipoRol'];
$duracion=$_POST['duracion'];
$fecha=$_POST['fecha'];
$fechaemision=$_POST['fechaemision'];
$calificacion= $_POST['calificacion'];
$relacionado=$_POST['relacionado'];
$regifolio=$_POST['regifolio'];
$IDDOCU = $_POST['nombre_archivo'];

	require("connect_db.php");

	 mysqli_query($mysqli,"INSERT INTO documento VALUES('','$tipodoc','$subtipodoc','$id','$emisor','$propietario' ,'$rols','$tituloNombre','$duracion','$fecha','$fechaemision','$calificacion','$relacionado','$regifolio','$IDDOCU','1')");

	 header("Location:documento.php");
?>