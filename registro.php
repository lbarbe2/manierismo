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
	$clase = $_POST['clase'];
	$comentario = $_POST['comentario'];


	include("conexion.php");


	$consulta = mysqli_query($conexion, "INSERT INTO cursos (nombre, apellido, email, clase, comentario) VALUES('$nombre','$apellido','$email', '$clase', '$comentario')");


	header("Location:cursos.html");

?>	
    

</body>
</html>