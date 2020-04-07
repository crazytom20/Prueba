<?php 
require 'funciones.php';
$conexion = conexion('next', 'root', '');

if (!$conexion) {
	die();
}

$id2=isset($_GET['id_documento']) ? (int)$_GET['id_documento'] : false;

if (!$id2) {
	header('Location:galeriaprincipal.php');
}

$statement=$conexion->prepare("SELECT * FROM tbl_documentos WHERE id_documento = :id_documento");
$statement->execute(array(':id_documento'=>$id2, ));

$fotos=$statement->fetch();
if (!$fotos) {
	header('Location:certificados.php');
}


require 'views/foto.vista.php';
?>