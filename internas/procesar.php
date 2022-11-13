<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php 
	//extract($_POST);

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$correo=$_POST['correo'];
	for ($i=0; $i <= 10 ; $i++) { 
		echo $i." Bienvenido <strong class='colorrojo'>".$nombres."</strong> ".$apellidos."<br>";
	}
	
 ?>