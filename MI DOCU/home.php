<!DOCTYPE html>
<?php
session_start();

if (@!$_SESSION['user']) {
	header("Location:home.php");
}

?>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>

<?php  
 
 


$id = $_SESSION['id'];

require "connect_db.php";
$sql  = 'SELECT * FROM permiso where id = '.$id;
$var = mysqli_query($mysqli,$sql);
$resul = mysqli_num_rows($var);
    ?>


<div class="content-page-container full-reset custom-scroll-containers" >
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
             
                <li  class="tooltips-general exit-system-button" data-href="desconectar.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittlesl"> 
                        <a href="" style="color:#fff;" >Editar Perfil</a>
                    </span>
                </li>
                
             
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Bienvenid@: <?php echo $_SESSION["user"];?></span>
                    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                </li>

               
<?php 

if ($resul==2 ) {
	echo	 '<select name="" id="" Style="margin-left:50px;margin-bottom:5px;">
				<option value="">Elija una opcion</option>
				<option value="">Usuario</option>
				<option value="">Editor</option>
				</select>' ;
}
?>

              
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">MI DOCU</h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 90px 0;height:50%;">
           <h1>ACERCA DE</h1>
            <article class="tile">
            <p class="form-group">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo esse reiciendis saepe aperiam est mollitia
                 sit excepturi unde, quaerat voluptates, fuga enim quis omnis aspernatur, veritatis velit officia iusto repellendus!
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quas facilis eveniet sit hic! Similique esse voluptates reprehenderit, odio, accusamus quaerat fuga ipsa perferendis nam commodi cum laboriosam incidunt rerum!
                 Quibusdam beatae nam maiores nemo voluptatem, nostrum facilis tenetur. Sequi id, ut alias voluptates impedit facere officiis. Impedit, similique reiciendis itaque reprehenderit voluptates recusandae eaque earum, delectus odit, rem eligendi!
                 Asperiores doloremque dolor iste voluptatum voluptate, tempore repellendus molestias odit commodi ullam numquam, dignissimos quibusdam aperiam incidunt tempora voluptatem, necessitatibus at? Error dicta minus ab eum omnis quaerat tempore vero!
                 Perferendis, non? Ducimus voluptate unde iure sunt. Aliquid ex voluptate amet, ipsa minus odio voluptatum nesciunt repellat sapiente exercitationem, optio cum accusamus aut velit eius pariatur facilis assumenda, temporibus magnam!
                 Corporis quos laboriosam ex voluptatum nihil fuga dolores vitae quibusdam eveniet corrupti dolore vel molestiae, quia nobis saepe itaque praesentium officia esse numquam illo. Amet delectus necessitatibus voluptates et repellat.
                 Id architecto ex, hic, eligendi veniam consectetur, provident odio perferendis voluptatibus atque obcaecati commodi aperiam vitae aut beatae. Culpa voluptas minus eum at dicta ducimus ipsam provident atque? Eos, unde!
                 Deleniti eaque, mollitia, itaque nulla quis porro dolore quasi laudantium natus aspernatur corrupti et dolores optio voluptatum, aliquid alias ipsum? Ex, voluptas voluptatum. Libero laboriosam sunt, a ullam consectetur officia!
                 Sunt accusamus, molestiae soluta a deleniti est quo consequatur? Temporibus iusto soluta minus consequatur dolor quam vitae exercitationem cupiditate libero facilis, debitis ullam natus possimus modi voluptatum suscipit? Id, incidunt!
                 Obcaecati, deserunt quasi! Maiores ratione nobis impedit repellat? Repellendus amet commodi laudantium beatae eaque. Vitae corrupti aliquam adipisci molestias eveniet, magnam enim aspernatur inventore dolor illum ratione sed neque illo!
                 Excepturi aperiam, consequatur perferendis quisquam facere voluptatem soluta eveniet ut pariatur perspiciatis tempore quam iure quidem dolore molestias sint nihil labore laboriosam ipsam vero. Quisquam atque omnis amet. Quod, commodi.
                 Dolorum eum maiores ipsa voluptatum, veritatis ea aliquam, deleniti repellat possimus pariatur quasi fugit earum repellendus totam culpa expedita vitae facilis, harum voluptates dolore! Minus obcaecati unde illo ab eos?
                 Laudantium eveniet unde quia, minima accusamus architecto nam provident dignissimos ut quam quis consequuntur amet doloribus quae facilis at voluptatum blanditiis debitis? Assumenda ut eaque vel hic, dicta consectetur illum!
                 Maxime incidunt deserunt quasi fugit blanditiis animi voluptatibus ratione dolorum et corporis nulla eligendi perspiciatis neque eveniet, accusamus expedita iste ipsam natus impedit eaque quas sunt sapiente debitis! Voluptatum, tempora.
                 Quia commodi enim, repudiandae eveniet temporibus assumenda autem, quis voluptates pariatur provident numquam accusamus vitae quae ad ex! Vitae nulla impedit minima rerum ex natus officiis non eaque facilis totam.
                 Inventore earum odio temporibus in magni nisi et. Perspiciatis temporibus minima deserunt itaque pariatur aperiam doloribus placeat quisquam? Incidunt nam ut quisquam odit, animi unde nihil repellat eos accusamus inventore.
                 Officia in dolore eaque rem doloribus ad unde ratione nemo modi quas, amet consequatur recusandae voluptatem, quis libero quibusdam quod, labore commodi. Doloribus ad ducimus iste veniam! Dignissimos, aliquid nulla.
                 Perferendis similique dolores excepturi quasi dignissimos modi culpa architecto quo minus sunt qui iste aliquam dolorum ipsa soluta veniam rem explicabo dicta accusantium obcaecati ad, libero numquam fugit natus. Nihil?
                 Magni, dolorem! Error, reiciendis labore modi fuga non, dolores provident hic tenetur vero sit corrupti, voluptates ut dolorum magni quo illo. Qui porro eaque iste! Quaerat sequi totam impedit minus!
                 Expedita iure inventore quaerat nam eaque saepe sapiente unde quasi aperiam sit amet velit ut quia commodi corrupti eum facilis id fuga hic dolor illum temporibus, porro voluptatem. Itaque, ex!
                 Distinctio nihil dolore excepturi temporibus iure consectetur voluptate repellat doloremque iste, sequi accusantium, id sint ratione veritatis ullam facilis, totam voluptatum nobis perspiciatis delectus! Iure exercitationem doloremque itaque qui incidunt!
            </p>
            </article>
           
        </section>
        
    </div>
                  



    <?php
	
	if ($resul == 0) {
        $cons  ='SELECT * FROM permiso WHERE privilegio = 0 and  id='.$id ;
        if ($cons == true) {
            echo '
            <div class="navbar-lateral full-reset">
            <div class="visible-xs font-movile-menu mobile-menu-button"></div>
            <div class="full-reset container-menu-movile custom-scroll-containers">
                <div class="logo full-reset all-tittles">
                    <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                 MI DOCU
                </div>
    
                <div class="full-reset nav-lateral-list-menu">
                    <ul class="list-unstyled">
                        <li><a href="home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Gestión de Documentos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                        <li><a href="sube.php">SUBIR ARCHVIO</a></li>
                                        <li><a href="subido.php">SUBIR VARIOS ARCHIVOS</a></li>
                                        <li><a href="galeriaprincipal.php">LISTA DE DOCUMENTOS</a></li>
               
                            </ul>
                        </li>        
                        
                    </ul>
                </div>
            </div>
        </div>';
        }
		
	}
            ?>















<?php	
	if ($resul == 1) {
        $con  ='SELECT * FROM permiso WHERE privilegio=1 and  id='.$id ;
        if ($con==true) {
                    
		echo '<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
             MI DOCU
            </div>

            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                 <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Gestión de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                <ul class="list-unstyled">
                    <li><a href="crearusuario.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp;Registar Nuevo Usuario</a></li>
                       <li><a href="lista_usuarios.php"><i class="zmdi zmdi-accounts"></i>&nbsp;&nbsp; Lista de usuarios</a></li>
           
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button">&nbsp;&nbsp; Ajustes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="#">&nbsp;&nbsp; Bitacora</a></li>
                            <li><a href="#">&nbsp;&nbsp; Estadisticas</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </div>
    
		 
				';
        }

	}
            ?>


            
            <?php
	
	if ($resul == 2) {
        $cons  ='SELECT * FROM permiso WHERE privilegio = 2 and  id='.$id ;
        if ($cons == true) {
            echo '
            <div class="navbar-lateral full-reset">
            <div class="visible-xs font-movile-menu mobile-menu-button"></div>
            <div class="full-reset container-menu-movile custom-scroll-containers">
                <div class="logo full-reset all-tittles">
                    <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                 MI DOCU
                </div>
    
                <div class="full-reset nav-lateral-list-menu">
                    <ul class="list-unstyled">
                        <li><a href="home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        
                        
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Gestión de Documentos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="subirdocumentos.php">SUBIR ARCHVIO</a></li>
                                <li><a href="subirvarios.php">SUBIR VARIOS ARCHIVOS</a></li>
                                <li><a href="galeriaprincipal.php">LISTA DE DOCUMENTOS</a></li>
                                <li><a href="docusuario.php">VINCULAR DOCUMENTOS</a></li>
               
                            </ul>
                            <div class="dropdown-menu-button">&nbsp;&nbsp; CATEGORIAS</div> 
                        </li> 

               
                     <ul class="list-unstyled">
                        <li>
                        <div class="dropdown-menu-button">&nbsp;&nbsp;  DOCUMENTOS PERSONALES BASICOS  <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                        <li><a href="dni.php">&nbsp;&nbsp;DNI</a></li>
                        <li><a href="partida.php">&nbsp;&nbsp;PARTIDA DE NACIMIENTO</a></li>
                        <li><a href="boletas.php">&nbsp;&nbsp;BOLETAS</a></li>
                        </ul>
                       
                        </li> 
                    </ul>

 
               
                    <ul class="list-unstyled">
                        <li>
                            <div class="dropdown-menu-button">&nbsp;&nbsp; DOCUMENTOS ESCOLARES <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                            
                            <li><a href="constancia_estudio.php">&nbsp;&nbsp;CONSTANCIA DE ESTUDIO</a></li>
                            <li><a href="libreta.php">&nbsp;&nbsp;LIBRETA DE NOTAS</a></li>
             
                        </ul>



                        <li>
                        <div class="dropdown-menu-button"> &nbsp;&nbsp; GRADOS Y TITULOS <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="bachiller.php">GRADO DE BACHILLER</a></li>
                            <li><a href="magister.php">GRADO DE MAGISTER</a></li>
                            <li><a href="doctorado.php"> GRADO DE DOCTORADO</a></li>
                       
           
                        </ul>
                       
                    </li> 


                    <li>
                    <div class="dropdown-menu-button"> &nbsp;&nbsp; CAPACITACIONES <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="diploma.php">DIPLOMA</a></li>
                        <li><a href="constanciaes.php">CONSTANCIAS</a></li>
                        <li><a href="certificados.php">CERTIFICADOS</a></li>
                      
       
                    </ul>
                   
                </li> 

                <li>
                <div class="dropdown-menu-button"> &nbsp;&nbsp; RECONOCIMIENTOS <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                <ul class="list-unstyled">
                    
   
                </ul>
               
            </li> 


                    </ul>
                </div>
            </div>
        </div>';
        }
		
    }
    

            ?>










<?php
	
	if ($resul == 3) {
        $const  ='SELECT * FROM permiso WHERE privilegio = 3 and  id='.$id ;
        if ($const == true) {
            echo '
            <div class="navbar-lateral full-reset">
            <div class="visible-xs font-movile-menu mobile-menu-button"></div>
            <div class="full-reset container-menu-movile custom-scroll-containers">
                <div class="logo full-reset all-tittles">
                    <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                 MI DOCU
                </div>
    
                <div class="full-reset nav-lateral-list-menu">
                    <ul class="list-unstyled">
                        <li><a href="home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li>
                <div class="dropdown-menu-button">&nbsp;&nbsp; Basicos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">      
                            <li><a href="TSdocu.php"> &nbsp;&nbsp;REGISTRAR TIPO  DE DOCUMENTO</a></li>
                            <li><a href="SUBtDOC.php"> &nbsp;&nbsp;REGISTRAR SUBTIPO  DE DOCUMENTO</a></li>
                    
                            </ul>
                        </li>    

                        <li>
                <div class="dropdown-menu-button">&nbsp;&nbsp; Proceso<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">  
                    <li><a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i>&nbsp;&nbsp;SUBIR ARCHIVO</a></li>
                    <li><a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i>&nbsp;&nbsp;SUBIR VARIOS ARCHIVOS</a></li>   
                    <li><a href="documento.php">&nbsp;DATOS DE DOCUMENTOS</a></li>    
                         <li><a href="lista_de_archivos.php">&nbsp;LISTA DE DATOS DE DOCUMENTOS</a></li>
                         <li><a href="lista.php">&nbsp; LISTA DE ARCHIVOS</a></li>
                    </ul>
                 </li>    
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>';
        }
		
	}
            ?>
            
            

 
 
</body>
</html>