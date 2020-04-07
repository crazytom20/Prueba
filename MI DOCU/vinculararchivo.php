<?php
 
$idD = $_GET['id_documento'];
$_SESSION['eleccion']  = $_REQUEST['IdSubTipoDocumento'];
$var = $_SESSION['eleccion'];

include_once('connect_db.php');

$sql = "UPDATE documento SET idSubTipoDocumento = '$var' WHERE id_documento = '$idD' ";
$resultado = mysqli_query($mysqli,$sql);

if ($resultado == true) {
    echo 'Archivo Vinculado con éxito';
}else{

    echo 'no vinculado';
}

?>


