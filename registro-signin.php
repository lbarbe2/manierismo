<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Clase</title>

</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);


	include("conexion.php");


	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, password) VALUES('$nombre','$apellido','$email', '$password')");


	header("Location:signin.html");

	if($resultado!=0){
		$respuesta=mysqli_fetch_array($consulta);
		header("Location:registro-login.php");
	
	}else{
		echo "Se encontró un error, vuelva a intentar.";
	}



?>	
 

</body>
</html>