<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADOS</title>
    <link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
    <link rel='stylesheet' type='text/css' media='screen' href='inicio.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='pginicio.css'>
</head>
<body>
<header>
        <div class="container">
        <a id="logo" href="\tu_futuro\HTML\inicio.html">
            <span class="site-name "> Tu Futuro</span>
            <span class="site-desc">Encontremos algo mejor</span>
        </a>
        
           <nav>
            <ul>
                <li>TEST</li>
                <li><a href="#">Contactanos </a></li>
            </ul>
        </nav><!-- / nav -->
        </div>
    </header>
    <section id="int"> 
        <h3>Aqui tienes tus resultados de tu examen</h3>
        <h3>para descargar tu pdf ingresa tu usuario de nuevo</h3>
        <p id="resultados">Resultados de interes </p>
        <form action="pdf.php" method="post" enctype="multipart/form-data">
        <p>Ingresa tu usuario: <input type="text" require name="usuario" placeholder="Usuario"></p>
        <p>Ingresa tu nombre: <input type="text" require name="usuario1" placeholder="nombre"></p>
	<input type="submit" name="aceptar" value="aceptar">
</form>
    </section> 
   
</body>
</html>