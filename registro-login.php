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
		
		echo "<span class='successful-login-message'> Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br /> </span>";
		echo "<span class='successful-login-message'>Ya podes acceder a tu perfil.</span> ";
		echo "<br><br><span class='link-miperfil'><a href='panel.php'>Mi Perfil</a></span>";	

}else{
	echo "<span class='successful-login-message'> No es un usuario registrado o su contraseña/mail es incorrecto </span>";

	echo "<br><br> <span class='link-miperfil'><a href='login.html'>volver a intentar</a> </span>";
}








?>

</div>

</body>
</html>