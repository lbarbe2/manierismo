<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <div class="bg-shade-fff">
    <header>
      <h1><a href="index.html"> MANIERISMO </a></h1> <p class="sign-in-sub"><a href="signin.html">Sign In</a></p>
    </header> 
    <nav>
      <ul>
        <li><div class="navbox"><a href="galeria.html">Galería</a></div></li>
        <li><div class="navbox"><a href="artistas.html">Artistas</a></div></li>
        <li><div class="navbox"><a href="historia.html">Historia</a></div></li>
        <li><div class="navbox"><a href="locaciones.html">Locaciones</a></div></li>
        <li><div class="navbox"><a href="cursos.html">Cursos</a></div></li>
      </ul>
    </nav>
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "<h2 style='text-align: center; padding-top: 30px;'>¡Hola"." ".$_SESSION['nombre']." ".$_SESSION['apellido']."!"." <br> </h2>"; 
echo "<p style='text-align: center; padding-top: 10px; padding-bottom: 40px;'>¡Estamos felices de verte!</p>";
echo "<span style='display: flex; justify-content: center;'><p>Encuentra las bellas artes del Manierismo en nuestra <a href='galeria.html'>galería</a> o contactanos en <a href='cursos.html'>cursos</a> para aprender a pintar en el estilo Manierista.</p></span>";
echo "<span style='display: flex; justify-content: center; padding-top: 20px;'><img src='img/pontormo.jpg'></span>";
echo "<br><br> <span style='display: flex; justify-content: center;'><a href='salir.php' style='padding-bottom: 60px; text-decoration: none; color: red; font-size: 20px;'>Cerrar sesion</a></span>";

	
}else{
	echo "<span class='failed-panel'> Solo usuarios registrados... </span><br>";
	echo "<span class='failed-panel'><a href='login.html'> home </a></span>";
}
?>
<footer>
       <div class="footer_logo-manierismo"> <a href="index.html">MAN<br>IERI<br>SMO</a> </div>

       <div class="footer_search-logo"><img src="img/search-13-32.png" alt=""></a></div>
        <div class="footer_search-bar">	<form action="resultados_buscar.php" method="post">
          <label>
          <input type="search" name="buscar" placeholder="Buscar..." />
          </label>
          </form>
        </div>
        
      <div class="redes-sociales">
        <div class="instagram"> <a href="#"><img src="img/instagram-logo.png" alt=""></a> </div>  <div class="facebook"> <a href="#"><img src="img/facebook-logo.png" alt=""></a> </div>  <div class="whatsapp"> <a href="#"><img src="img/whatsapp-logo.png" alt=""></a> </div>
      </div>
      </footer>
</div>
</body>
</html>