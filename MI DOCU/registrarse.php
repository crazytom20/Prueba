<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="csss/bootstrap.min.css">
	
	 
    
 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
	 
    <title>Registro</title>

	<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});



function mostrarPass(){
		var cambio = document.getElementById("txtPass");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>

  </head>
  <body>

 
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
<a href="#" class="navbar-brand" Style="margin-left:25px;">Registrarse</a>
</div>
</div>
</nav>



		<div class="container">
		<div class="row mt-5">
			<div class="col">
 
    <form action="" method="post" class="form-control"  >
       <table  class="form-control">
      <tr>
      <td>Nombres: </td>
        <td>  <input type="text" class="form-control"  name="realname" required placeholder="Nombres"><br></td>

      </tr>

      <tr>
      <td>Apellidos:</td>
        <td><input type="text" class="form-control" name="apellido" required placeholder="Apellidos"><br></td>
      </tr>

      <tr>
      <td>DNI: </td>
      <td>  <input type="number" class="form-control"  name="dni" required placeholder="DNI"><br></td>
      </tr>
           
           
      <tr>
      <td>Teléfono: </td>
      <td> <input type="number" class="form-control"  name="telefono" required placeholder="Teléfono"><br></td>
      </tr>

      
      <tr>
      <td>Correo Eléctronico:</td>
      <td><input type="text" class="form-control"  name="nick" required placeholder="Correo Electrónico"><br></td>
      </tr>
           
   


<tr>
<td>Departamento</td>
<td>

 
 
<?php 
	
	require("connect_db.php");
	$query_depar = mysqli_query($mysqli ,"SELECT * FROM departamentos ORDER BY Departamento");
	mysqli_close($mysqli );
	$result_depar = mysqli_num_rows($query_depar);
 	?>
	<select name="departamentos" id="CboDepartamentos" class="form-control" >
	<option value="0">Elija una opción</option>
	<?php 
		if($result_depar > 0)
		{
            
			while ($depar = mysqli_fetch_array($query_depar)) {
	?>
 
			<option value="<?php echo $depar["IdDepartamento"]; ?>"><?php echo $depar["Departamento"] ?></option>
	<?php 
			}		
		}
	 ?>
</select><br>

</td>
</tr>

  

<tr>
<td>Provincias</td>
<td>
 
<?php 
	
	require("connect_db.php");
	$query_prov = mysqli_query($mysqli ,"SELECT * FROM provincias ORDER BY Provincia ");
	mysqli_close($mysqli );
	$result_prov = mysqli_num_rows($query_prov);
 	?>
	<select name="provincias" id="CboProvincias" class="form-control">
		<option value="0">Elija una opción</option>
	<?php 
		if($result_prov > 0)
		{
			while ($prov = mysqli_fetch_array($query_prov)) {
	?>
			<option value="<?php echo $prov["IdProvincia"]; ?>"><?php echo $prov["Provincia"] ?></option>
	<?php 
			}		
		}
	 ?>
</select><br>
</td>
</tr>



<tr>
<td>Distritos</td>
<td>
 

<?php 
	
	require("connect_db.php");
	$query_dis = mysqli_query($mysqli ,"SELECT * FROM distritos ORDER BY Distrito");
	mysqli_close($mysqli );
	$result_dis = mysqli_num_rows($query_dis);
 	?>
	<select name="distritos" id="CboDistritos" class="form-control">
	<option value="0">Elija una opción</option>
	<?php 
		if($result_dis > 0)
		{
			while ($dis = mysqli_fetch_array($query_dis)) {
	?>

			<option value="<?php echo $dis["IdDistrito"]; ?>"><?php echo $dis["Distrito"] ?></option>
	<?php 
			}		
		}
	 ?>
</select><br>

</td>
</tr>



<tr>
<td>Sexo</td>
<td>
<select name="sexo" id="sexo" class="form-control">
<option value="0">Elija una opcion</option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select><br>
</td>
</tr>


 
      <tr>
      <td>Contraseña:</td>
      <td> <input type="password" id="txtPassword"class="form-control"  name="pass" required placeholder="Contraseña" ><br></td>
	  <td><button style="margin-bottom:22px;" id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon" ></span> </button> </td>      
      </tr>
            
      <tr>
      <td>Repetir Contraseña:</td>
      <td><input  type="password" id="txtPass" class="form-control"  name="rpass" required placeholder="Repite Contraseña"><br></td>
	  <td> <button style="margin-bottom:22px;" id="show_password" class="btn btn-primary" type="button" onclick="mostrarPass()"> <span class="fa fa-eye-slash icon"></span> </button> </td>     
      </tr>

      <tr>
      
      <th><a href="index.php" class="btn btn-primary">Iniciar sesion</a> </th>
	  <th><input  class="btn btn-danger" type="submit" name="submit" value="Registrarse" Style="margin-left:25px;" /> </th>
      </tr>
       </table>
 
 
				

</form>


<?php
		 if(isset($_POST['submit'])){
		require("registro.php");
		}
		
	?>
</div>
		</div>
	</div>
    
    </body>
	<script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
</html>
