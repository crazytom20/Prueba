<?php 
session_start();
$id=$_SESSION['id'];


require 'funciones.php';
$fotos_por_pagina = 12;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('next', 'root', '');
if (!$conexion) {
	die();
}

$statement = $conexion->prepare("SELECT idTipoDocumento,idSubTipoDocumento,id_documento,nombre_archivo FROM documento where id='$id' and idTipoDocumento=4 and idSubTipoDocumento=10");
 
$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
	header('Location: diploma.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);


require 'views/index.diploma.php';

?>