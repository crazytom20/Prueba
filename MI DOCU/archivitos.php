
<?php

include_once ('connect_db.php');
/* isset --> comprobamos si una variable esta definida */
if (isset($_GET['idDocumento'])){

    $idD = $_GET['idDocumento'];
    $query = "SELECT * FROM documento WHERE idDocumento = '$idD'";
    $resul = mysqli_query($mysqli,$query);
 
    $datos = mysqli_fetch_row($resul);

    if (isset($_POST['cambiar'])) {

        $Tdoc = $_POST['idTipoDocumento'];
        $STdoc = $_POST['idSubTipoDocumento'];
        $idusuario = $_POST['id'];
        $Emisor = $_POST['Emisor'];
        $Propietario = $_POST['Propietario'];
        $Rol = $_POST['Rol'];
        $titnom = $_POST['TituloNombre'];
        $durac = $_POST['DuracionHoras'];
        $fech = $_POST['Fechas'];
        $fechemi = $_POST['Fecha_de_Emision'];
        $cal = $_POST['Calificacion'];
        $dr = $_POST['Documento_Relacionado'];
        $rf = $_POST['Registro_folio'];
           
 
        $sql = "UPDATE documento SET idTipoDocumento = '$Tdoc',	idSubTipoDocumento = ' $STdoc', id = '$idusuario',
        Emisor = '$Emisor', Propietario = '$Propietario',Rol = '$Rol',TituloNombre='$titnom',DuracionHoras = '$durac',
        Fechas = '$fech',Fecha_de_Emision = '$fechemi',Calificacion = '$cal',Documento_Relacionado = '$dr',Registro_folio  ='$rf' 
        where idDocumento = '$idDD'";

        $resultado = mysqli_query($mysqli,$sql);

        if ($resultado == 1) {
            header("Location:lista_de_archivos.php");
        }
    }

} else {
    header("Location:editar_archivo.php");
}

?>


 