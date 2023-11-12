<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login de Usuarios</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="bg-shade-fff">
    <header>
      <h1><a href="index.html">MANIERISMO</a></h1>
    </header>
<?php
$email=$_POST['email'];
$password=md5($_POST['password']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE email='$email' AND password='$password'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		echo "<h2 style='display: flex; flex-direction: row; justify-content: space-evenly; margin-top: 30px; margin-left: auto; margin-right: auto; font-size: 26px; font-weight: 700;'> Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
		echo "Ya podes acceder a tu perfil. ";
		echo "<br><br><a href='panel.php' style='padding-bottom: 50px; margin-top: 20px;'>Mi Perfil</a>";	

}else{
	echo "No es un usuario registrado";
	include ("form_registro.php");
}








?>
</div>
</body>
</html>