<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Manierismo - Artistas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="bg-shade-fff">
    <header>
      <h1><a href="index.html">MANIERISMO</a></h1>
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

    <div class="container">
      <section>
    <?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
?>
<article style="width:60%;margin:0 auto;border:solid;padding:10px">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		/*  mysqli_fetch_row -> Crea un array indexado
			mysqli_fetch_assoc -> Crea un array asociativo
			mysqli_fetch_array -> Crea un array indexado y asociativo (ocupa mas espacio)
		*/

		while($resultados=mysqli_fetch_assoc($consulta)) {
	?>
    
    <p>
    <?php	
			echo $resultados['bio'];
      echo $resultados['foto'];
	?>

    </p>
    <hr/>
    <?php
    }

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>  
</section>
</div>

    <footer>
      <div class="footer_logo-manierismo"> <a href="index.html">MAN<br>IERI<br>SMO</a> </div>

      <div class="footer_search-logo"><a href="#"><img src="img/search-13-32.png" alt=""></a></div>
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

  </body>
</html>