<!doctype html>
<?php
session_start();      
?>


<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.man.css">
        <link rel="stylesheet" href="css/est.css">
	    <title>Document</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();

				var current = $(this).attr('action');

				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}

				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
				}
			})
		})
	</script>

	<style>
		.input-group {
			width: 100%;
			margin: 0 auto;
			margin-top: 1px;
		}
		span {
			cursor: pointer;
		}
	</style>
</head>
<body>
<div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                       <center> <h1><a href="">MI DOCU<span class="red"></span></a></h1></center>
                    </div>
                </div>
            </div>
        </div>


        <div class="register-container container">
            <div class="row">
                <center>
                <div  class="register" style="width: 330px;">
                    <form action="validar.php" method="post">
                        <h2>Iniciar <span class="red"><strong>Sesión</strong></span></h2>
                        <label for="Mensaje" id="Mensaje"></label>
                        <label for="usuario_login" id="usuario_login">Usuario:</label>
                        <br>
                        <input type="text" id="usuario_login" name="mail"  class="form-control" style="width: 90%;height: 30px; margin-left:27px;" placeholder="Usuario">
                        <br><br>                  
                        <label for="password_login">Contraseña:</label>
                        <br>
                        <div class="input-group">
            <input type="password" class="form-control" name="pass" style="width: 90%;height: 30px; margin-left:27px;"  placeholder="Contraseña">
            <span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>                      
                        </div>
                       <br>
                        <input type="submit" value="Enviar">
                        <br><br>
                        <a href="registrarse.php">Registrese</a>
                    </form>
                </div>
                </center>
            </div>
        </div>
        
        <!-- Javascript -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>

</body>
</html>





